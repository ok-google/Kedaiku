<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;
use App\Kas;

class MutasiKasController extends Controller
{
    public function index()
	{
		$Kas = Kas::get();

		return view('mutasi.index', compact("Kas", $Kas));	
	}

	public function getAll(Request $request)
	{
		$data = Mutasi::select('mutasi.*', 'kasDebet.nama as NamaKasDebet', 'kasKredit.nama as NamaKasKredit')
						   ->join('kas as KasDebet', 'mutasi.id_kas_debet', 'KasDebet.id')
						   ->join('kas as KasKredit', 'mutasi.id_kas_kredit', 'KasKredit.id')
						   ->where('tanggal', '>=', date('Y-m-d', strtotime($request->start)))
						   ->where('tanggal', '<=', date('Y-m-d', strtotime($request->end)))
						   ->get();

    	return response()->json($data);
	}

	public function store(Request $request)
    {
    	$dataModel = Mutasi::create([
										'tanggal' => date('Y-m-d', strtotime($request->Tanggal)),
			    						'id_kas_debet' => $request->KasDebetId,
			    						'id_kas_kredit' => $request->KasKreditId,
			    						'jumlah_debet' => $request->Jumlah,
			    						'jumlah_kredit' => $request->Jumlah,
										]);

    	$dataKas = Kas::where('id', $request->KasDebetId)->first();

    	$dataKas->saldo = $dataKas->saldo - $request->Jumlah;

    	$KasModel = Kas::where('id', $dataKas->id)
    					 ->update([
    					 	'saldo' => $dataKas->saldo
    					 ]);

    	$dataKas = Kas::where('id', $request->KasKreditId)->first();

    	$dataKas->saldo = $dataKas->saldo + $request->Jumlah;

    	$KasModel = Kas::where('id', $dataKas->id)
    					 ->update([
    					 	'saldo' => $dataKas->saldo
    					 ]);

		return response()->json(['success'=> 'Mutasi berhasil ditambahkan']);
    }
}
