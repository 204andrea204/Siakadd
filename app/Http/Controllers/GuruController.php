<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mapel;
use \App\Guru;

class GuruController extends Controller
{
    public function index()
    {
    	$d['mapels'] = Mapel::all();
    	$d['gurus'] = Guru::all();
    	return view("suadmin.guru.index", $d);
    }
    public function tambah()
    {
        $d['mapels'] = Mapel::all();
        return view("suadmin.guru.add", $d);
    }
    public function add(Request $r){
    	$d = new Guru;
    	$d->mapel_id = $r->input("mapel_id");
    	$d->nip = $r->input("nip");
    	$d->nama = $r->input("nama");
    	$d->lulusan = $r->input("lulusan");
    	$d->jenis_kelamin = $r->input("jenis_kelamin");
    	$d->tempat_lahir = $r->input("tempat_lahir");
    	$d->tggl_lahir = $r->input("tggl_lahir");
    	$d->keterangan = $r->input("keterangan");

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/guru", $filename);
            $d->foto = $filename;
        }

    	$d->save();
        return redirect('/guru');
    }
    public function edit($id){
        $d['mapels'] = Mapel::all();
        $d['gurus'] = Guru::find($id);
        return view('suadmin.guru.edit', $d);
    }
    public function update(Request $r){
        $d = Guru::find($r->input('id'));
        $d->mapel_id = $r->input("mapel_id");
        $d->nip = $r->input("nip");
        $d->nama = $r->input("nama");
        $d->lulusan = $r->input("lulusan");
        $d->jenis_kelamin = $r->input("jenis_kelamin");
        $d->tempat_lahir = $r->input("tempat_lahir");
        $d->tggl_lahir = $r->input("tggl_lahir");
        $d->keterangan = $r->input("keterangan");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/guru", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/guru');
    }

    public function delete($id){
        $guru = Guru::find($id);
        $guru->delete();
        return redirect(url('/guru'));
    }
}
