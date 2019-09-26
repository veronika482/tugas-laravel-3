<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;

class artikel_controller extends Controller
{
    public function index(){
    	$artikel=artikel::all();

    	return view('artikel.index', compact('artikel'));

	}
}
