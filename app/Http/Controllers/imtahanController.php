<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\imtahan;
use App\muellim;
use App\sinif;


class imtahanController extends Controller
{
    public function indexMuellim()
    {
    	$imtahanlar=imtahan::where('muellim_id',$_SESSION['muellimID'])->get();
    	return view('muellim.imtahanlar.index',compact('imtahanlar'));
    }

    public function imtahanElave()
    {
    	return view('muellim.imtahanlar.add');
    }

    public function saveExam(Request $request)
    {
    	$sinif=sinif::where('text',$request->sinif_id)->first();
    	$sinifId=$sinif->id;

    	$imtahan=new imtahan();

    	$imtahan->muellim_id=$_SESSION['muellimID'];
    	$imtahan->sinif_id=$sinifId;
    	$imtahan->melumat=$request->melumat;
    	$imtahan->imtahan_tarixi=$request->imtahan_tarixi;

    	$imtahan->save();

    	return back()->with('success','İmtahan əlavə edildi.');
    }


    public function delete($id)
    {
        $imtahan=imtahan::find($id);
        $imtahan->delete();
        return back();
    }
}
