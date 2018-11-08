<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengeluaran extends Controller
{
	public function index()
	{
		return view('Pengeluaran.index');	
	}

    public function dashboard()
    {
        return view('Pengeluaran.dashboard');
    }
    
}
