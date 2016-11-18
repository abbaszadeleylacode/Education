<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\candidates;

use App\sagird;

class registerController extends Controller
{
     public function new(Request $request)
     {
     	
    	$new=new candidates;

    	$new->name=$request->name;
    	$new->surname=$request->surname;
    	$new->ata_adi=$request->ata_adi;
    	$new->age=$request->age;
    	$new->sinif_id=$request->sinif_id;
    	$new->city=$request->city;
    	$new->address=$request->address;
    	$new->passport_no=$request->passport_no;

    	if($request->hasFile('photo')){
    		$file=$request->file('photo');
    		$filename=time().'.'.$file->getClientOriginalExtension();
    		$file->move('assets/images/avatars',$filename);
    		$path='assets/images/avatars/'.$filename;
    		$new->photo=$path;
    	}

    	$new->email=$request->email;
    	$new->password=$request->password;
    	$new->phone=$request->phone;

    	$new->save();
    	
    	return back()->with('success','Tələbiniz göndərildi. Sizə tezliklə cavab veriləcək!');
     }

     public function accept($id)
     {
     	$sagird=new sagird;
     	$teleb=candidates::find($id);

     	$sagird->name=$teleb->name;
     	$sagird->surname=$teleb->surname;
     	$sagird->address=$teleb->address;
     	$sagird->avatar=$teleb->photo;
     	$sagird->password=$teleb->password;
     	$sagird->email=$teleb->email;
     	$sagird->age=$teleb->age;
     	$sagird->sinif_id=$teleb->sinif_id;
     	$sagird->ata_adi=$teleb->ata_adi;
     	$sagird->city=$teleb->city;
     	$sagird->passport_no=$teleb->passport_no;
     	$sagird->phone=$teleb->phone;
     	$sagird->save();
     	$teleb->delete();
     	return back();
     }

     public function reject($id)
     {
     	$reject=candidates::find($id);
     	$reject->delete();
     	return back();
     }

     public function show($id)
     {
     	$telebler=candidates::find($id);
     	return view('admin.teleb.show',compact('telebler'));
     }

     public function axtaris(Request $request)
    {
        $ad=$request->ad;
        $soyad=$request->soyad;
        $sagirdler=candidates::where([['name',$ad],['surname',$soyad]])->get();
        return view('admin.teleb.tapilan',compact('sagirdler'));
    }

}
