<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;

class PemasukanController extends Controller
{
	public function index()
	{
		return view('Pemasukan.index');	
	}

	public function getAll()
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

		return response()->json(['success'=> 'Pemasukan berhasil ditambahkan']);
    }
    
}
