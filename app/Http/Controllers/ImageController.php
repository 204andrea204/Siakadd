<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use \App\Image; 
use Hash;

class ImageController extends Controller
{
	public function index()
	{
		$d['images'] = Image::all();
		return view("suadmin.galeri.index", $d);
	}
    public function add()
    {
    	return view('admin.gallery.add');
    }
    public function save(Request $r)
    {
    	$n = new Image;
    	 if (Input::hasFile('image')) {
      $files = Input::file('image');
      foreach($files as $g) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$g->getClientOriginalExtension();
        $g->move(storage_path('images'), $gambar2);
        Image::create([
            'image' => $gambar2,
          ]);
    }  
    }
    	return redirect(url('/galeri'));
    }
    public function delete($id)
    {
    	$image = Image::find($id);
    	$image->delete();
    	return redirect(url('/galeri'));
    }

}
