<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel;

class kategori_artikel_controller extends Controller
{
    public function index(){
    	$kategori_artikel=kategori_artikel::all();

    	return view('kategori_artikel.index', compact('kategori_artikel'));
    }
}
