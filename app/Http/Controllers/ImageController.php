<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image; 
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
	public function index()
	{
		return view('suadmin.galeri.index');
	}

    public function store(Request $request)
	{
	    if ($request->hasFile('profile_image')) {
	 
	        foreach($request->file('profile_image') as $file){
	 
	            //get filename with extension
	            $filenamewithextension = $file->getClientOriginalName();
	 
	            //get filename without extension
	            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
	 
	            //get file extension
	            $extension = $file->getClientOriginalExtension();
	 
	            //filename to store
	            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
	 
	            Storage::put('public/profile_images/'. $filenametostore, fopen($file, 'r+'));
	            Storage::put('public/profile_images/thumbnail/'. $filenametostore, fopen($file, 'r+'));
	 
	            //Resize image here
	            $thumbnailpath = public_path('storage/profile_images/thumbnail/'.$filenametostore);
	            $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
	                $constraint->aspectRatio();
	            });
	            $img->save($thumbnailpath);
	        }
	 
	        return redirect('/galeri')->with('status', "Image uploaded successfully.");
	    }
	}
}
