<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel;
use App\artikel;

class kategori_artikel_controller extends Controller
{
    public function index(){
    	$kategori_artikel=kategori_artikel::all();

    	return view('kategori_artikel.index', compact('kategori_artikel'));
    }

    public function show($id){
    	$kategori_artikel=kategori_artikel::find($id);

    	return view('kategori_artikel.show', compact('kategori_artikel'));
    }

    public function create(){
    	$kategori_artikel=kategori_artikel::pluck('nama', 'id');

    	return view('kategori_artikel.create', compact('kategori_artikel'));
    }

    public function store(Request $request){
    	$input=$request->all();
    	kategori_artikel::create($input);

    	return redirect(route('kategori_artikel.index'));
    }

    public function edit($id){
        $kategori_artikel=kategori_artikel::find($id);

        if(empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }
        return view('kategori_artikel.edit', compact('kategori_artikel'));
    }

    public function update($id, Request $request){
        $kategori_artikel=kategori_artikel::find($id);
        $input=$request->all();

        if(empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }
        
        $kategori_artikel->update($input);
        return redirect(route('kategori_artikel.index'));
    }

    public function destroy($id){
        $kategori_artikel=kategori_artikel::find($id);

        if(empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }
        
        $kategori_artikel->delete();
        return redirect(route('kategori_artikel.index'));
    }
}