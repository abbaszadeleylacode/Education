<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\candidates;

class registerController extends Controller
{
     public function new(Request $request)
    {
    	candidates::create($request->all());
    	return back()->with('success','Tələbiniz göndərildi. Sizə tezliklə cavab veriləcək!');
    }
}
