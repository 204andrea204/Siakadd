<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Berita;

class BeritaController extends Controller
{
    public function index()
    {
    	return view('suadmin.berita.index');
    }
    public function tambah()
    {
        return view("suadmin.berita.add");
    }
    public function add(Request $r){
    	$d = new Berita;
    	$d->judul = $r->input("judul");
    	$d->pembuat = $r->input("pembuat");
    	$d->tanggal = $r->input("tanggal");
    	$d->isi = $r->input("isi");
    	$d->video = $r->input("video");
    	$d->view = $r->input("view");

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/berita", $filename);
            $d->foto = $filename;
        }

    	$d->save();
        return redirect('/berita');
    }
    public function edit($id)
    {
    	$a = Berita::find($id);
    	return view('suadmin.berita.edit')->with('a',$a);
    }
    public function update(Request $r){
        $d = Berita::find($r->input('id'));
        $d->judul = $r->input("judul");
        $d->pembuat = $r->input("pembuat");
        $d->tanggal = $r->input("tanggal");
        $d->isi = $r->input("isi");
        $d->video = $r->input("video");
        $d->view = $r->input("view");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/berita", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/berita');
    }

    public function delete($id){
        $berita = Berita::find($id);
        $berita->delete();
        return redirect(url('/berita'));
    }
}
