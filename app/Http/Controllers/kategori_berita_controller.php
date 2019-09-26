<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_berita;

class kategori_berita_controller extends Controller
{
    public function index(){
    	$kategori_berita=kategori_berita::all();

    	return view('kategori_berita.index', compact('kategori_berita'));

	}
}
