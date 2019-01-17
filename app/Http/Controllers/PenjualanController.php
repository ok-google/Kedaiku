<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Produk;

class PenjualanController extends Controller
{
	public function index()
	{
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

		return response()->json(['success'=> 'Pembelian berhasil ditambahkan']);
    }
    
}
