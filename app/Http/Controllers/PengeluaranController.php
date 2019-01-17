<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;
use App\Kas;

class PengeluaranController extends Controller
{
	public function index()
	{
		$Kas = Kas::get();

		return view('pengeluaran.index', compact("Kas", $Kas));	
	}

	public function getAll(Request $request)
	{
		$data = Pengeluaran::select('pengeluaran.*', 'kas.nama as NamaKas')
						   ->join('kas', 'Pengeluaran.id_kas', 'kas.id')
						   ->where('tanggal', '>=', date('Y-m-d', strtotime($request->start)))
						   ->where('tanggal', '<=', date('Y-m-d', strtotime($request->end)))
						   ->get();

    	return response()->json($data);
	}

	public function store(Request $request)
    {
    	$dataModel = Pengeluaran::create([
										'tanggal' => date('Y-m-d', strtotime($request->Tanggal)),
			    						'id_kas' => $request->KasId,
			    						'transaksi' => $request->Transaksi,
			    						'jumlah' => $request->Jumlah
										]);

    	$dataKas = Kas::where('id', $request->KasId)->first();

    	$dataKas->saldo = $dataKas->saldo - ($request->Qty * $request->Harga);

    	$KasModel = Kas::where('id', $dataKas->id)
    					 ->update([
    					 	'saldo' => $dataKas->saldo
    					 ]);

		return response()->json(['success'=> 'Pengeluaran berhasil ditambahkan']);
    }
    
}
