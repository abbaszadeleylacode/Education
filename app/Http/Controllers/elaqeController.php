<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Elaqe;
use App\admin;
use App\sagird;
use App\muellim;
use App\valideynler;
class elaqeController extends Controller
{

	// ---------------------Admin ucun olan functionlar--------------------
    public function indexAdmin()
    {
    	$mails=elaqe::where([['reciever_id',$_SESSION['adminId']],['reciever_type','a']])->orderBy('id','desc')->get();
    	return view('admin.elaqe.index',compact('mails'));
    }

    public function delete($id)
    {
    	$mail=elaqe::find($id);
    	$mail->delete();
    	return back();
    }

    public function sendAdmin(Request $request)
    {
    	if ($request->kind=='1') {
            if(!is_null(muellim::where('email',$request->reciever)->first())){
               $muellim=muellim::where('email',$request->reciever)->first()->id;
               $new= new elaqe;
               $new->sender_id=$_SESSION['adminId'];
               $new->reciever_id=$muellim;
               $new->sender_type='a';
               $new->reciever_type='m';
               $new->title=$request->title;
               $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-admin'>Geri dön</a>";
            }	    		
    	}
    		
    	if ($request->kind=='2') {
            if(!is_null(sagird::where('email',$request->reciever)->first())){
                $sagird=sagird::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['adminId'];
                $new->reciever_id=$sagird;
                $new->sender_type='a';
                $new->reciever_type='s';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-admin'>Geri dön</a>";
            }   	    	
    		
    	}
    	if ($request->kind=='3') {
            if(!is_null(admin::where('email',$request->reciever)->first())){
                $admin=admin::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['adminId'];
                $new->reciever_id=$admin;
                $new->sender_type='a';
                $new->reciever_type='a';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-admin'>Geri dön</a>";
            }     		
    		
    	}
        if ($request->kind=='4') {
            if(!is_null(valideynler::where('email',$request->reciever)->first())){
                $valideyn=valideynler::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['adminId'];
                $new->reciever_id=$valideyn;
                $new->sender_type='a';
                $new->reciever_type='v';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-admin'>Geri dön</a>";
            }             
            
        }

    }

    public function sentAdmin()
    {
    	$mails=elaqe::where([['sender_id',$_SESSION['adminId']],['sender_type','a']])->orderBy('id','desc')->get();
    	return view('admin.elaqe.sent',compact('mails'));
    }

    public function showMail($id)
    {
    	$mail=elaqe::find($id);
    	return view('admin.elaqe.show',compact('mail'));
    }

    public function showMailQebul($id)
    {
    	$mail=elaqe::find($id);
    	return view('admin.elaqe.qebul',compact('mail'));
    }

    // ---------------------Muellim ucun olan functionlar--------------------
     public function indexMuellim()
    {
    	$mails=elaqe::where([['reciever_id',$_SESSION['muellimID']],['reciever_type','m']])->orderBy('id','desc')->get();
    	return view('muellim.elaqe.index',compact('mails'));
    }


     public function sendMuellim(Request $request)
    {
    	if ($request->kind=='1') {
            if(!is_null(muellim::where('email',$request->reciever)->first())){
                $muellim=muellim::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['muellimID'];
                $new->reciever_id=$muellim;
                $new->sender_type='m';
                $new->reciever_type='m';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-muellim'>Geri dön</a>";
            }    		
	    		
    	}
    		
    	if ($request->kind=='2') {
            if(!is_null(sagird::where('email',$request->reciever)->first())){
                $sagird=sagird::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['muellimID'];
                $new->reciever_id=$sagird;
                $new->sender_type='m';
                $new->reciever_type='s';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-muellim'>Geri dön</a>";
            }     		
    		
    	}
    	if ($request->kind=='3') {
            if(!is_null(admin::where('email',$request->reciever)->first())){
                $admin=admin::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['muellimID'];
                $new->reciever_id=$admin;
                $new->sender_type='m';
                $new->reciever_type='a';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-muellim'>Geri dön</a>";
            }  
    		
    		
    	}
        if ($request->kind=='4') {
            if(!is_null(valideynler::where('email',$request->reciever)->first())){
                $valideyn=valideynler::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['muellimID'];
                $new->reciever_id=$valideyn;
                $new->sender_type='m';
                $new->reciever_type='v';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-muellim'>Geri dön</a>";
            }            
            
        }

    }


    public function sentMuellim()
    {
    	$mails=elaqe::where([['sender_id',$_SESSION['muellimID']],['sender_type','m']])->orderBy('id','desc')->get();
    	return view('muellim.elaqe.sent',compact('mails'));
    }


    public function showMailMuellim($id)
    {
    	$mail=elaqe::find($id);
    	return view('muellim.elaqe.show',compact('mail'));
    }

    public function showMailQebulMuellim($id)
    {
    	$mail=elaqe::find($id);
    	return view('muellim.elaqe.qebul',compact('mail'));
    }


    //Sagirdler ucun olan functionlar
     public function indexSagird()
    {
        $mails=elaqe::where([['reciever_id',$_SESSION['sagirdID']],['reciever_type','s']])->orderBy('id','desc')->get();
        return view('sagird.elaqe.index',compact('mails'));
    }


     public function sendSagird(Request $request)
    {
        if ($request->kind=='1') {
            if(!is_null(muellim::where('email',$request->reciever)->first())){
                $muellim=muellim::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['sagirdID'];
                $new->reciever_id=$muellim;
                $new->sender_type='s';
                $new->reciever_type='m';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-sagird'>Geri dön</a>";
            } 
            
                
        }
            
        if ($request->kind=='2') {
            if(!is_null(sagird::where('email',$request->reciever)->first())){
                $sagird=sagird::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['sagirdID'];
                $new->reciever_id=$sagird;
                $new->sender_type='s';
                $new->reciever_type='s';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-sagird'>Geri dön</a>";
            } 
            
            
        }
        if ($request->kind=='3') {
            if(!is_null(admin::where('email',$request->reciever)->first())){
                $admin=admin::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['sagirdID'];
                $new->reciever_id=$admin;
                $new->sender_type='s';
                $new->reciever_type='a';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-sagird'>Geri dön</a>";
            } 
            
            
        }
        if ($request->kind=='4') {
            if(!is_null(valideynler::where('email',$request->reciever)->first())){
                $valideyn=valideynler::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['sagirdID'];
                $new->reciever_id=$valideyn;
                $new->sender_type='s';
                $new->reciever_type='v';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-sagird'>Geri dön</a>";
            }           
            
        }

    }


    public function sentSagird()
    {
        $mails=elaqe::where([['sender_id',$_SESSION['sagirdID']],['sender_type','s']])->orderBy('id','desc')->get();
        return view('sagird.elaqe.sent',compact('mails'));
    }


    public function showMailSagird($id)
    {
        $mail=elaqe::find($id);
        return view('sagird.elaqe.show',compact('mail'));
    }

    public function showMailQebulSagird($id)
    {
        $mail=elaqe::find($id);
        return view('sagird.elaqe.qebul',compact('mail'));
    }



    //Valideynler ucun olan functionlar




    public function indexValideyn()
    {
        $mails=elaqe::where([['reciever_id',$_SESSION['valideynID']],['reciever_type','v']])->orderBy('id','desc')->get();
        return view('valideyn.elaqe.index',compact('mails'));
    }


     public function sendValideyn(Request $request)
    {
        if ($request->kind=='1') {
            if(!is_null(muellim::where('email',$request->reciever)->first())){
                $muellim=muellim::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['valideynID'];
                $new->reciever_id=$muellim;
                $new->sender_type='v';
                $new->reciever_type='m';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-valideyn'>Geri dön</a>";
            }               
                
        }
            
        if ($request->kind=='2') {
            if(!is_null(sagird::where('email',$request->reciever)->first())){
                $sagird=sagird::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['valideynID'];
                $new->reciever_id=$sagird;
                $new->sender_type='v';
                $new->reciever_type='s';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-valideyn'>Geri dön</a>";
            }                
            
        }
        if ($request->kind=='3') {
            if(!is_null(admin::where('email',$request->reciever)->first())){
                $admin=admin::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['valideynID'];
                $new->reciever_id=$admin;
                $new->sender_type='v';
                $new->reciever_type='a';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-valideyn'>Geri dön</a>";
            } 
            
            
        }
        if ($request->kind=='4') {
            if(!is_null(valideynler::where('email',$request->reciever)->first())){
                $valideyn=valideynler::where('email',$request->reciever)->first()->id;
                $new= new elaqe;
                $new->sender_id=$_SESSION['valideynID'];
                $new->reciever_id=$valideyn;
                $new->sender_type='v';
                $new->reciever_type='v';
                $new->title=$request->title;
                $new->content=$request->content;

                $new->save();
                return back();
            }else{
                echo "Mesaj göndərilə bilmədi!";
                echo "<a href='elaqe-valideyn'>Geri dön</a>";
            } 
            
            
        }

    }


    public function sentValideyn()
    {
        $mails=elaqe::where([['sender_id',$_SESSION['valideynID']],['sender_type','v']])->orderBy('id','desc')->get();
        return view('valideyn.elaqe.sent',compact('mails'));
    }


    public function showMailValideyn($id)
    {
        $mail=elaqe::find($id);
        return view('valideyn.elaqe.show',compact('mail'));
    }

    public function showMailQebulValideyn($id)
    {
        $mail=elaqe::find($id);
        return view('valideyn.elaqe.qebul',compact('mail'));
    }

}
