<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Bahan;
use App\Kas;

class PembelianController extends Controller
{
	public function index()
	{
        $Bahan = Bahan::get();
        $Kas = Kas::get();

		return view('Pembelian.index', compact("Bahan", $Bahan), compact("Kas", $Kas));	
	}

    public function dashboard()
    {
        return view('Pembelian.dashboard');
    }
    
    public function getAll()
    {
    	$data = Pembelian::get();

    	return response()->json($data);
    }

    public function store(Request $request)
    {
		$dataModel = Pembelian::create([
										'tanggal' => $request->Tanggal,
			    						'id_bahan' => $request->BahanId,
			    						'qty' => $request->Qty,
			    						'harga' => $request->Harga,
			    						'id_kas' => $request->KasId
										]);

		return response()->json(['success'=> 'Pembelian berhasil ditambahkan']);
    }

    public function update(Request $request)
    {
    	$dataModel = Pembelian::where('id', $request->id)
    							->update([
										'tanggal' => $request->Tanggal,
			    						'id_bahan' => $request->BahanId,
			    						'qty' => $request->Qty,
			    						'harga' => $request->Harga,
			    						'id_kas' => $request->KasId
										]);

		return response()->json(['success'=> 'Pembelian berhasil diupdate']);	
    }

    public function delete(Request $request)
    {
    	$dataModel = Pembelian::where('id', $request->id)
    							->delete();

		return response()->json(['success'=> 'Pembelian berhasil dihapus']);	
    }
}
