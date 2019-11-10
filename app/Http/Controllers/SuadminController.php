<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuadminController extends Controller
{
    public function index()
    {
    	return view('suadmin.index');
    }
}
