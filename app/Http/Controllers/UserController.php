<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
     public function index()
    {
    	$user = \App\User::all(); 
    	return view('suadmin.user-admin.index', compact('user'));
    }

    public function status(Request $s)
    {
    	$status = User::find($s->id);
    	if ($status->role == '2') {
    		$status->role = '1';
    		$status->save();
    	}
    	return 'test';
    }

    public function add(Request $r)
    {
    	$user = new User;
        $user->nama = $r->nama;
        $user->username = $r->username;
        $user->email = $r->email;
        $user->password = $r->password;
        $user->nohp = $r->nohp;
        
        if ($r->hasFile('foto')) {
            $file1 = $r->file('foto');
            $filename1 = $file1->getClientOriginalName();
            $r->file('foto')->move('foto/', $filename1);
            $user->foto = $filename1;
        }
        $user->alamat = $r->alamat;
        $user->save();
        return redirect('/user-admin');
    }

    public function edit($id){
        $user = User::find($id);
    	return view('suadmin.user-admin.edit')->with('user',$user);
    }
    public function update(Request $r){
        $user = User::find($r->id);
        $user->nama = $r->nama;
        $user->username = $r->username;
        $user->email = $r->email;
        $user->password = $r->password;
        $user->nohp = $r->nohp;
        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/user", $filename);
            $user->foto = $filename;
        }
        $user->alamat = $r->alamat;
        $user->save();
        return redirect('/user-admin');
    }

    public function delete($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect(url('/user-admin'));
    }
}
