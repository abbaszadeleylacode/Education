<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\muellim;



class muellimController extends Controller
{
    public function index()
    {
    	$muellimler=muellim::all();
    	return view('admin.muellim.index',compact('muellimler'));
    }

    public function add()
    {
    	return view('admin.muellim.add');
    }

    public function save(Request $request)
    {
    	$new=new muellim;

    	$new->name=$request->name;
    	$new->surname=$request->surname;
    	$new->fenn=$request->fenn;
        $new->ders_id='neytral';

    	if($request->hasFile('photo')){
    		$file=$request->file('photo');
    		$filename=time().'.'.$file->getClientOriginalExtension();
    		$file->move('assets/images/avatars',$filename);
    		$path='assets/images/avatars/'.$filename;
    		$new->avatar=$path;
    	}

    	$new->email=$request->email;
    	$new->password=$request->password;
    	$new->phone=$request->phone;

    	$new->save();

        return back()->with('success','Müəllim əlavə olundu!');
    }

     public function axtaris(Request $request)
    {
        $ad=$request->ad;
        $soyad=$request->soyad;
        $muellimler=muellim::where([['name',$ad],['surname',$soyad]])->get();
        return view('admin.muellim.tapilan',compact('muellimler'));
    }

    public function delete($id)
    {
    	$muellim=muellim::find($id);
    	$muellim->delete();
    	return back();
    }

    public function show($id)
    {
    	$muellim=muellim::find($id);
    	return view('admin.muellim.show',compact('muellim'));
    }



    // Muellimler ucun olan functionlar-------------------------

    public function indexMuellim()
    {
        $muellimler=muellim::all();
        return view('muellim.muellim.index',compact('muellimler'));
    }

     public function axtarisMuellim(Request $request)
    {
        $ad=$request->ad;
        $soyad=$request->soyad;
        $muellimler=muellim::where([['name',$ad],['surname',$soyad]])->get();
        return view('muellim.muellim.tapilan',compact('muellimler'));
    }

    public function showMuellim($id)
    {
        $muellim=muellim::find($id);
        return view('muellim.muellim.show',compact('muellim'));
    }
}
