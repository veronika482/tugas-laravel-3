<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_galeri;

class kategori_galeri_controller extends Controller
{
    public function index(){
    	$kategori_galeri=kategori_galeri::all();

    	return view('kategori_galeri.index', compact('kategori_galeri'));

	}
}
