<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekskul;
use App\Sekbid;

class EkskulController extends Controller
{
    public function index()
    {
    	$d['sekbids'] = Sekbid::all();
    	$d['ekskuls'] = Ekskul::all();
    	return view("suadmin.ekskul.index", $d);
    }
    public function tambah()
    {
        $d['ekskuls'] = Ekskul::all();
        $d['sekbids'] = Sekbid::all();
        return view("suadmin.ekskul.add", $d);
    }
    public function add(Request $r){
    	$d = new Ekskul;
    	$d->sekbid_id = $r->input("sekbid_id");
    	$d->nama_eks = $r->input("nama_eks");
    	$d->nama_pelatih = $r->input("nama_pelatih");
    	$d->visimisi = $r->input("visimisi");
    	$d->jadwal = $r->input("jadwal");
    	$d->koordinator = $r->input("koordinator");
    	$d->keterangan = $r->input("keterangan");

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/ekskul", $filename);
            $d->foto = $filename;
        }

    	$d->save();
        return redirect('/ekskul');
    }
    public function edit($id){
        $d['sekbids'] = Sekbid::all();
        $d['ekskuls'] = ekskul::find($id);
        return view('suadmin.ekskul.edit', $d);
    }
    public function update(Request $r){
        $d = Ekskul::find($r->input('id'));
        $d->sekbid_id = $r->input("sekbid_id");
    	$d->nama_eks = $r->input("nama_eks");
    	$d->nama_pelatih = $r->input("nama_pelatih");
    	$d->visimisi = $r->input("visimisi");
    	$d->jadwal = $r->input("jadwal");
    	$d->koordinator = $r->input("koordinator");
    	$d->keterangan = $r->input("keterangan");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/ekskul", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/ekskul');
    }

    public function delete($id){
        $ekskul = Ekskul::find($id);
        $ekskul->delete();
        return redirect(url('/ekskul'));
    }
}
