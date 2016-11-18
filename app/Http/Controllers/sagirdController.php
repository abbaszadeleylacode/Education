<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\candidates;

use App\sagird;

class sagirdController extends Controller
{
    public function index()
    {
    	$sagirdler=sagird::all();
    	return view('admin.sagirdler',compact('sagirdler'));
    }

    public function teleb()
    {
    	$telebler=candidates::all();
    	return view('admin.teleb.teleb',compact('telebler'));
    }
}
