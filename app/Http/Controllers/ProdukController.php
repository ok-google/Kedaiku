<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
	public function index()
	{
		$data = Produk::get();

		return view('Produk.index', compact("data", $data));	
	}

	public function getAll()
	{
		$data = Produk::get();

		return response()->json($data);
	}

	public function store(Request $request)
	{
		$BahanModel = Produk::create([
						'nama' => $request->Nama,
						'harga' => $request->Harga
					]);

		return response()->json(['success'=> $request->Nama.' berhasil ditambahkan']);
	}

	public function update(Request $request)
	{
		$BahanModel = Produk::where('id', $request->id)
							->update([
								'nama' => $request->Nama,
								'harga' => $request->Harga
							]);

		return response()->json(['success'=> $request->Nama.' berhasil diupdate']);	
	}

	public function delete(Request $request)
	{
		$BahanModel = Produk::where('id', $request->id)
							->delete();

		return response()->json(['success'=> $request->Nama.' berhasil dihapus']);		
	}
    
}
