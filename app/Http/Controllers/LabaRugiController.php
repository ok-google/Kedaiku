<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LabaRugiController extends Controller
{
    public function index()
    {
        return view('labarugi.index');
    }

    public function getAll(Request $request)
    {
    	$Data = DB::table('LabaRugi')
    				->where('tanggal', '>=', date('Y-m-d', strtotime($request->start)))
					->where('tanggal', '<=', date('Y-m-d', strtotime($request->end)))
    				->get();

    	
   		return response()->json($Data);
    }
}
