<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahan;

class BahanController extends Controller
{
	public function index()
	{
		$data = Bahan::get();

		return view('Bahan.index', compact("data", $data));	
	}

	public function getAll()
	{
		$data = Bahan::get();

		return response()->json($data);
	}

	public function store(Request $request)
	{
		$BahanModel = Bahan::create([
						'nama' => $request->Nama
					]);

		return response()->json(['success'=> $request->Nama.' berhasil ditambahkan']);
	}

	public function update(Request $request)
	{
		$BahanModel = Bahan::where('id', $request->id)
							->update([
								'nama' => $request->Nama
							]);

		return response()->json(['success'=> $request->Nama.' berhasil diupdate']);	
	}

	public function delete(Request $request)
	{
		$BahanModel = Bahan::where('id', $request->id)
							->delete();

		return response()->json(['success'=> $request->Nama.' berhasil dihapus']);		
	}
    
}
