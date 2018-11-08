<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pemasukan extends Controller
{
	public function index()
	{
		return view('Pemasukan.index');	
	}

    public function dashboard()
    {
        return view('Pemasukan.dashboard');
    }
    
}
