<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Jurusan;

class SiswaController extends Controller
{
    public function index()
    {
    	$d['jurusans'] = Jurusan::all();
    	$d['siswas'] = Siswa::all();
    	return view("suadmin.siswa.index", $d);
    }
    public function tambah()
    {
        $d['jurusans'] = Jurusan::all();
        return view("suadmin.siswa.add", $d);
    }
    public function add(Request $r){
    	$d = new Siswa;
    	$d->jurusan_id = $r->input("jurusan_id");
    	$d->nisn = $r->input("nisn");
    	$d->nis = $r->input("nis");
    	$d->nama = $r->input("nama");
    	$d->nohp = $r->input("nohp");
    	$d->jenis_kelamin = $r->input("jenis_kelamin");
    	$d->kelas = $r->input("kelas");
    	$d->tempat_lahir = $r->input("tempat_lahir");
    	$d->tggl_lahir = $r->input("tggl_lahir");

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/siswa", $filename);
            $d->foto = $filename;
        }

    	$d->save();
        return redirect('/siswa');
    }
    public function edit($id){
        $d['jurusans'] = Jurusan::all();
        $d['siswas'] = Siswa::find($id);
        return view('suadmin.siswa.edit', $d);
    }
    public function update(Request $r){
        $d = Siswa::find($r->input('id'));
        $d->jurusan_id = $r->input("jurusan_id");
        $d->nisn = $r->input("nisn");
        $d->nis = $r->input("nis");
        $d->nama = $r->input("nama");
        $d->nohp = $r->input("nohp");
        $d->jenis_kelamin = $r->input("jenis_kelamin");
        $d->kelas = $r->input("kelas");
        $d->tempat_lahir = $r->input("tempat_lahir");
        $d->tggl_lahir = $r->input("tggl_lahir");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/siswa", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/siswa');
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect(url('/siswa'));
    }
}