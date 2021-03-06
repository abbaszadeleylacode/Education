<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\muellim;
use App\admin;
use App\sagird;
use App\valideynler;

use App\filiallar;
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

                $filiallar=filiallar::all();
                return view('admin.filialsec',compact('filiallar'));
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
                $filiallar=filiallar::all();
                return view('admin.filialsec',compact('filiallar'));
            }else{
                return back()->with('wrong','E-poçt və ya şifrə yanlışdır!');
            }
        }
    }


    public function logoutAdmin()
    {
        if(isset($_SESSION['adminTrue'])){

            session_unset($_SESSION['adminTrue']);
            session_unset($_SESSION['adminId']);
            session_unset($_SESSION['filial_id']);
            session_destroy();
            return redirect('/admin-login');

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


    public function logoutSagird()
    {
        if(isset($_SESSION['sagirdTrue'])){
            session_unset($_SESSION['sagirdTrue']);
            session_destroy();
            return redirect('/');
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
    public function logoutValideyn()
    {
        if(isset($_SESSION['valideynTrue'])){
            session_unset($_SESSION['valideynTrue']);
            session_destroy();
            return redirect('/');
        }
    }
}
