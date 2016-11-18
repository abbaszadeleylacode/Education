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
    	candidates::create($request->all());
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

}
