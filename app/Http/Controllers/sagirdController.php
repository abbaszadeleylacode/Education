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

    public function show($id)
    {
        $sagirdler=sagird::find($id);
        return view('admin.sagird.show',compact('sagirdler'));
    }

    public function delete($id)
    {
        $sagird=sagird::find($id);
        $sagird->delete();
        return back();
    }

    public function axtaris(Request $request)
    {
        $ad=$request->ad;
        $soyad=$request->soyad;
        $sagirdler=sagird::where([['name',$ad],['surname',$soyad]])->get();
        return view('admin.sagird.tapilan',compact('sagirdler'));
    }
}
