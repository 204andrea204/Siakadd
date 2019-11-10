<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mapel;

class MapelController extends Controller
{
    public function index()
    {
    	$mapel = \App\Mapel::all(); 
    	return view('suadmin.mapel.index', compact('mapel'));
    }
    public function add(Request $r)
    {
    	$mapel = new Mapel;
        $mapel->napel = $r->napel;
        $mapel->save();
        return redirect('/mapel');
    }
    public function edit($id){
        $mapel = Mapel::find($id);
    	return view('suadmin.mapel.edit')->with('mapel',$mapel);
    }
    public function update(Request $r){
        $mapel = Mapel::find($r->id);
        $mapel->napel = $r->napel;
        $mapel->save();
        return redirect('/mapel');
    }
    public function delete($id)
    {
    	$mapel = Mapel::find($id);
    	$mapel->delete();
    	return redirect(url('/mapel'));
    }
}
