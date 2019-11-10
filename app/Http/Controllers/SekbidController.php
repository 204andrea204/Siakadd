<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekbid;

class SekbidController extends Controller
{
    public function index()
    {
    	$sekbid = \App\Sekbid::all(); 
    	return view('suadmin.sekbid.index', compact('sekbid'));
    }
    public function add(Request $r)
    {
    	$sekbid = new Sekbid;
        $sekbid->nama = $r->nama;
        $sekbid->deskripsi = $r->deskripsi;
        $sekbid->save();
        return redirect('/sekbid');
    }
    public function edit($id){
        $sekbid = Sekbid::find($id);
    	return view('suadmin.sekbid.edit')->with('sekbid',$sekbid);
    }
    public function update(Request $r){
        $sekbid = Sekbid::find($r->id);
        $sekbid->nama = $r->nama;
        $sekbid->deskripsi = $r->deskripsi;
        $sekbid->save();
        return redirect('/sekbid');
    }
    public function delete($id)
    {
    	$sekbid = Sekbid::find($id);
    	$sekbid->delete();
    	return redirect(url('/sekbid'));
    }
}
