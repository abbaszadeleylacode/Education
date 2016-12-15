<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\admin;
use App\muellim;
use App\sagird;
use App\valideynler;
class settingsController extends Controller
{

	//Adminler ucun olan functionlar
    public function indexAdmin()
    {
    	$admin=admin::find($_SESSION['adminId']);
    	return view('admin.settings',compact('admin'));
    }

    public function updateAdmin(Request $request)
    {
    	admin::find($_SESSION['adminId'])->update($request->all());
    	return back()->with('success','Dəyişikliklər qeydə alındı.');
    }

    //Muellimler ucun olan functionlar
    public function indexMuellim()
    {
    	$muellim=muellim::find($_SESSION['muellimID']);
    	return view('muellim.settings',compact('muellim'));
    }

    public function updateMuellim(Request $request)
    {
    	$muellim=muellim::find($_SESSION['muellimID']);

    	$muellim->name=$request->name;
    	$muellim->surname=$request->surname;
    	$muellim->email=$request->email;
    	$muellim->password=$request->password;

    	if($request->hasFile('photo')){
    		$file=$request->file('photo');
    		$filename=time().'.'.$file->getClientOriginalExtension();
    		$file->move('assets/images/avatars',$filename);
    		$path='assets/images/avatars/'.$filename;
    		$muellim->avatar=$path;
    	}

    	$muellim->save();
    	return back()->with('success','Dəyişikliklər qeydə alındı.');
    }

     //Sagirdler ucun olan functionlar
    public function indexSagird()
    {
    	$sagird=sagird::find($_SESSION['sagirdID']);
    	return view('sagird.settings',compact('sagird'));
    }

    public function updateSagird(Request $request)
    {
    	$sagird=sagird::find($_SESSION['sagirdID']);
    	$sagird->email=$request->email;
    	$sagird->password=$request->password;
    	$sagird->save();
    	return back()->with('success','Dəyişikliklər qeydə alındı.');
    }


    //Valideynler ucun olan functionlar
    public function indexValideyn()
    {
    	$valideyn=valideynler::find($_SESSION['valideynID']);
    	return view('valideyn.settings',compact('valideyn'));
    }

    public function updateValideyn(Request $request)
    {
    	valideynler::find($_SESSION['valideynID'])->update($request->all());
    	return back()->with('success','Dəyişikliklər qeydə alındı.');
    }
}
