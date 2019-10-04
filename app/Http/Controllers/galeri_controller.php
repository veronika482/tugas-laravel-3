<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\kategori_galeri;

class galeri_controller extends Controller
{
    public function index(){
    	$galeri=galeri::all();

    	return view('galeri.index', compact('galeri'));

	}

	public function show($id){
		$galeri=galeri::find($id);

		return view('galeri.show', compact('galeri'));
	}
	public function create(){
		$galeri=galeri::pluck('nama','keterangan','path','id');

		return view('galeri.create', compact('galeri'));
	}
	
	public function store(Request $request){
	$input=$request->all();

	galeri::create($input);
	
	return redirect(route('galeri.index'));	
	
	}
}
