<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\Kas;

class PemasukanController extends Controller
{
	public function index()
	{
		$Kas = Kas::get();

		return view('Pemasukan.index', compact("Kas", $Kas));	
	}

	public function getAll(Request $request)
	{
		$data = Pemasukan::select('pemasukan.*', 'kas.nama as NamaKas')
						   ->join('kas', 'pemasukan.id_kas', 'kas.id')
						   ->where('tanggal', '>=', date('Y-m-d', strtotime($request->start)))
						   ->where('tanggal', '<=', date('Y-m-d', strtotime($request->end)))
						   ->get();

    	return response()->json($data);
	}

	public function store(Request $request)
    {
    	$dataModel = Pemasukan::create([
										'tanggal' => date('Y-m-d', strtotime($request->Tanggal)),
			    						'id_kas' => $request->KasId,
			    						'transaksi' => $request->Transaksi,
			    						'jumlah' => $request->Jumlah
										]);

    	$dataKas = Kas::where('id', $request->KasId)->first();

    	$dataKas->saldo = $dataKas->saldo + ($request->Qty * $request->Harga);

    	$KasModel = Kas::where('id', $dataKas->id)
    					 ->update([
    					 	'saldo' => $dataKas->saldo
    					 ]);

		return response()->json(['success'=> 'Pemasukan berhasil ditambahkan']);
    }
    
}
