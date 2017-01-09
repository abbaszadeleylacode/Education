<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\filiallar;

class filialController extends Controller
{
    public function adminPanel($id)
    {
    	$_SESSION['filial_id']=$id;	
    	return view('admin.index');
    }
}
