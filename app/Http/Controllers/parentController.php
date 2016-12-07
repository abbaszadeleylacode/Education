<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\valideynler;
use App\sagird;

class parentController extends Controller
{
   public function indexAdmin()
   {
   		$valideynler=valideynler::all();
   		return view('admin.valideyn.index',compact('valideynler'));
   }

   public function delete($id)
   {
   		$valideyn=valideynler::find($id);
   		$valideyn->delete();
   		return back();
   }

   public function addValideyn()
   {
   		$sagirdler=sagird::all();
   		return view('admin.valideyn.add',compact('sagirdler'));
   }


   public function show($id)
   {
   		$valideyn=valideynler::find($id);
   		return view('admin.valideyn.show',compact('valideyn'));
   }


   public function saveValideyn(Request $request)
   {
   		$new=new valideynler;
   		$new->name=$request->name;
   		$new->surname=$request->surname;
   		$new->email=$request->email;
   		$new->password=$request->password;
   		$new->phone=$request->phone;
   		$new->sagird_id=$request->sagird_id;

   		$new->save();
   		return back()->with('success','Valideyn əlavə edildi');
   }


    public function axtaris(Request $request)
    {
        $ad=$request->ad;
        $soyad=$request->soyad;
        $valideynler=valideynler::where([['name',$ad],['surname',$soyad]])->get();
        return view('admin.valideyn.tapilan',compact('valideynler'));
    }



    // -------------------Muellimler ucun olan functionlar----------------------------
    public function indexMuellim()
   {
      $valideynler=valideynler::all();
      return view('muellim.valideyn.index',compact('valideynler'));
   }


    public function axtarisMuellim(Request $request)
    {
        $ad=$request->ad;
        $soyad=$request->soyad;
        $valideynler=valideynler::where([['name',$ad],['surname',$soyad]])->get();
        return view('muellim.valideyn.tapilan',compact('valideynler'));
    }

    public function showMuellim($id)
   {
      $valideyn=valideynler::find($id);
      return view('muellim.valideyn.show',compact('valideyn'));
   }
}
