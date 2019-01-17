<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Produk;
use App\Kas;

class PenjualanController extends Controller
{
	public function index()
	{
		$Produk = Produk::get();

		return view('Penjualan.index', compact("Produk", $Produk));	
	}

    public function dashboard()
    {	
        return view('Penjualan.dashboard');
    }

    public function getAll(Request $request)
    {
    	$data = Penjualan::select('penjualan.*', 'produk.nama as NamaProduk')
						   ->join('produk', 'penjualan.id_produk', 'produk.id')
						   ->where('tanggal', '>=', date('Y-m-d', strtotime($request->start)))
						   ->where('tanggal', '<=', date('Y-m-d', strtotime($request->end)))
						   ->get();

    	return response()->json($data);
    }

    public function store(Request $request)
    {
    	$dataModel = Penjualan::create([
											'tanggal' => date('Y-m-d', strtotime($request->Tanggal)),
				    						'id_produk' => $request->ProdukId,
				    						'qty' => $request->Qty,
				    						'harga' => $request->Harga
										]);

    	$dataKas = Kas::where('isDefault', 1)->first();

    	$dataKas->saldo = $dataKas->saldo + ($request->Qty * $request->Harga);

    	$KasModel = Kas::where('id', $dataKas->id)
    					 ->update([
    					 	'saldo' => $dataKas->saldo
    					 ]);

		return response()->json(['success'=> 'Penjualan berhasil ditambahkan']);
    }
    
}
