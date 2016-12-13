<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Elaqe;
use App\admin;
use App\sagird;
use App\muellim;
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
	    		
    	}
    		
    	if ($request->kind=='2') {
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
    		
    	}
    	if ($request->kind=='3') {
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
	    		
    	}
    		
    	if ($request->kind=='2') {
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
    		
    	}
    	if ($request->kind=='3') {
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
                
        }
            
        if ($request->kind=='2') {
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
            
        }
        if ($request->kind=='3') {
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

}
