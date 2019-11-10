<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
    	$jurusan = \App\Jurusan::all(); 
    	return view('suadmin.jurusan.index', compact('jurusan'));
    }
    public function add(Request $r)
    {
    	$jurusan = new Jurusan;
        $jurusan->nama = $r->nama;
        $jurusan->save();
        return redirect('/jurusan');
    }
    public function edit($id){
        $jurusan = Jurusan::find($id);
    	return view('suadmin.jurusan.edit')->with('jurusan',$jurusan);
    }
    public function update(Request $r){
        $jurusan = Jurusan::find($r->id);
        $jurusan->nama = $r->nama;
        $jurusan->save();
        return redirect('/jurusan');
    }
    public function delete($id)
    {
    	$jurusan = Jurusan::find($id);
    	$jurusan->delete();
    	return redirect(url('/jurusan'));
    }
}
