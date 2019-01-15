<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kas;

class KasController extends Controller
{
	public function index()
	{
		$data = Kas::get();

		return view('Kas.index', compact("data", $data));	
	}

	public function getAll()
	{
		$data = Kas::get();

		return response()->json($data);
	}

	public function store(Request $request)
	{
		$KasModel = Kas::create([
						'nama' => $request->Nama,
						'saldo' => $request->Saldo
					]);

		return response()->json(['success'=> $request->Nama.' berhasil ditambahkan']);
	}

	public function update(Request $request)
	{
		$KasModel = Kas::where('id', $request->id)
							->update([
								'nama' => $request->Nama,
								'saldo' => $request->Saldo
							]);

		return response()->json(['success'=> $request->Nama.' berhasil diupdate']);	
	}

	public function delete(Request $request)
	{
		$KasModel = Kas::where('id', $request->id)
							->delete();

		return response()->json(['success'=> $request->Nama.' berhasil dihapus']);		
	}
    
}
