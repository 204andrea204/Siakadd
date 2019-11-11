<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
    	return view('suadmin.prestasi.index');
    }
    public function tambah()
    {
        return view("suadmin.prestasi.add");
    }
    public function add(Request $r){
    	$d = new Prestasi;
    	$d->nama_pres = $r->input("nama_pres");
    	$d->tingkat = $r->input("tingkat");
    	$d->peraih = $r->input("peraih");
    	$d->keterangan = $r->input("keterangan");

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/prestasi", $filename);
            $d->foto = $filename;
        }

    	$d->save();
        return redirect('/prestasi');
    }
    public function edit($id)
    {
    	$a = Prestasi::find($id);
    	return view('suadmin.prestasi.edit')->with('a',$a);
    }
    public function update(Request $r){
        $d = Prestasi::find($r->input('id'));
        $d->nama_pres = $r->input("nama_pres");
        $d->tingkat = $r->input("tingkat");
        $d->peraih = $r->input("peraih");
        $d->keterangan = $r->input("keterangan");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/prestasi", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/prestasi');
    }

    public function delete($id){
        $prestasi = Prestasi::find($id);
        $prestasi->delete();
        return redirect(url('/prestasi'));
    }
}
