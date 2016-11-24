<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\muellim;

class loginController extends Controller
{

    public function muellim(Request $request)
    {
        if(isset($_SESSION)){
            $email=$request->email;
            $password=$request->password;
            if(muellim::where([['email',$email],['password',$password]])->first()){
                $muellim=muellim::where([['email',$email],['password',$password]])->first();
                $_SESSION['muellimTrue']='muellimSistemde';
                $_SESSION['muellimID']=$muellim->id;
                return view('muellim.index',compact('muellim'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }else{
            session_start();
            $email=$request->email;
            $password=$request->password;

            if(muellim::where([['email',$email],['password',$password]])->first()){
                $muellim=muellim::where([['email',$email],['password',$password]])->first();
                $_SESSION['muellimTrue']='muellimSistemde';
                $_SESSION['muellimID']=$muellim->id;
                return view('muellim.index',compact('muellim'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }
        
    	
    }

    public function logoutMuellim()
    {
        if(isset($_SESSION['muellimTrue'])){
            session_unset($_SESSION['muellimTrue']);
            session_destroy();
            return redirect('/');
        }
    }
}
