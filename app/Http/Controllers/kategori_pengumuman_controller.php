<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_pengumuman;
use App\pengumuman;

class kategori_pengumuman_controller extends Controller
{
        public function index(){
    	$kategori_pengumuman=kategori_pengumuman::all();

    	return view('kategori_pengumuman.index', compact('kategori_pengumuman'));

	}

	public function show($id){
		$kategori_pengumuman=kategori_pengumuman::find($id);

		return view('kategori_pengumuman.show', compact('kategori_pengumuman'));
	}

	public function create(){
		$kategori_pengumuman=kategori_pengumuman::pluck('nama','id');

		return view('kategori_pengumuman.create', compact('kategori_pengumuman'));
	}

    public function store(Request $request){
    	$input=$request->all();
    	kategori_pengumuman::create($input);

    	return redirect(route('kategori_pengumuman.index'));
    }

    public function edit($id){
        $kategori_pengumuman=kategori_pengumuman::find($id);

        if(empty($kategori_pengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }
        return view('kategori_pengumuman.edit', compact('kategori_pengumuman'));
    }

    public function update($id, Request $request){
        $kategori_pengumuman=kategori_pengumuman::find($id);
        $input=$request->all();

        if(empty($kategori_pengumuman)){
            return redirect(route('kategori_pengumuman.index'));
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
