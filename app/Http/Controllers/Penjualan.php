<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Penjualan extends Controller
{
	public function index()
	{
		return view('Penjualan.index');	
	}

    public function dashboard()
    {
        return view('Penjualan.dashboard');
    }
    
}
