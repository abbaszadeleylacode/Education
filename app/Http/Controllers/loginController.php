<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\muellim;

class loginController extends Controller
{
    public function muellim(Request $request)
    {
    	$email=$request->email;
    	$password=$request->password;

    	if(muellim::where([['email',$email],['password',$password]])->first()){
    		$muellim=muellim::where([['email',$email],['password',$password]])->first();
    		return view('muellim.index',compact('muellim'));
    	}else{
    		return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
    	}
    }
}
