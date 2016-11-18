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
    	$telebler=candidates::all();
    	$sagirdler=sagird::all();
    	return view('admin.sagirdler',compact('telebler','sagirdler'));

    }
}
