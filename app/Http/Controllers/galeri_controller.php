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
    	$kategori_galeri=kategori_galeri::pluck('nama', 'id');

    	return view('galeri.create', compact('kategori_galeri'));
    }

    public function store(Request $request){
    	$input=$request->all();
    	galeri::create($input);

    	return redirect(route('galeri.index'));
    }

    public function edit($id){
        $galeri=galeri::find($id);
        $kategori_galeri=kategori_galeri::pluck('nama', 'id');

        if(empty($galeri)){
            return redirect(route('galeri.index'));
        }
        return view('galeri.edit', compact('galeri', 'kategori_galeri'));
    }

    public function update($id, Request $request){
        $galeri=galeri::find($id);
        $input=$request->all();

        if(empty($galeri)){
            return redirect(route('galeri.index'));
        }
        
        $galeri->update($input);
        return redirect(route('galeri.index'));
    }

    public function destroy($id){
        $galeri=galeri::find($id);

        if(empty($galeri)){
            return redirect(route('galeri.index'));
        }
        
        $galeri->delete();
        return redirect(route('galeri.index'));
    }

}