<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\muellim;
use App\admin;
use App\sagird;
use App\valideynler;
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



    public function admin(Request $request)
    {
        if(isset($_SESSION)){
            $email=$request->email;
            $password=$request->password;
            if(admin::where([['email',$email],['password',$password]])->first()){
                $admin=admin::where([['email',$email],['password',$password]])->first();
                $_SESSION['adminTrue']='adminSistemde';
                $_SESSION['adminId']=$admin->id;
                return view('admin.index',compact('admin'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }else{
            session_start();
            $email=$request->email;
            $password=$request->password;

            if(admin::where([['email',$email],['password',$password]])->first()){
                $admin=admin::where([['email',$email],['password',$password]])->first();
                $_SESSION['adminTrue']='adminSistemde';
                $_SESSION['adminId']=$admin->id;
                return view('admin.index',compact('admin'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }
    }





     public function sagird(Request $request)
    {
        if(isset($_SESSION)){
            $email=$request->email;
            $password=$request->password;
            if(sagird::where([['email',$email],['password',$password]])->first()){
                $sagird=sagird::where([['email',$email],['password',$password]])->first();
                $_SESSION['sagirdTrue']='sagirdSistemde';
                $_SESSION['sagirdID']=$sagird->id;
                return view('sagird.index',compact('sagird'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }else{
            session_start();
            $email=$request->email;
            $password=$request->password;

            if(sagird::where([['email',$email],['password',$password]])->first()){
                $sagird=sagird::where([['email',$email],['password',$password]])->first();
                $_SESSION['sagirdTrue']='sagirdSistemde';
                $_SESSION['sagirdID']=$sagird->id;
                return view('sagird.index',compact('sagird'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }
    }

    public function valideyn(Request $request)
    {
        if(isset($_SESSION)){
            $email=$request->email;
            $password=$request->password;
            if(valideynler::where([['email',$email],['password',$password]])->first()){
                $valideyn=valideynler::where([['email',$email],['password',$password]])->first();
                $_SESSION['valideynTrue']='valideynSistemde';
                $_SESSION['valideynID']=$valideyn->id;
                return view('valideyn.index',compact('valideyn'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }else{
            session_start();
            $email=$request->email;
            $password=$request->password;

            if(valideynler::where([['email',$email],['password',$password]])->first()){
                $valideyn=valideynler::where([['email',$email],['password',$password]])->first();
                $_SESSION['valideynTrue']='valideynSistemde';
                $_SESSION['valideynID']=$valideyn->id;
                return view('valideyn.index',compact('valideyn'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }
    }
}
