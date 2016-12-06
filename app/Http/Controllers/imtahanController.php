<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\imtahan;
use App\muellim;
use App\sinif;
use App\sagird;
use App\imtahan_netice;


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

    public function qiymet($id)
    {
        $exam=imtahan::find($id);
        $sinifID=$exam->sinif_id;
        $sinifAdi=sinif::where('id',$sinifID)->first()->text;
        $sagirdler=sagird::where('sinif_id',$sinifAdi)->get();

        return view('muellim.imtahanlar.qiymetlendirme',compact('sagirdler','exam'));
    }

    public function qiymetPersonal($id,$sd)
    {
        $sagird=sagird::find($sd);
        return view('muellim.imtahanlar.qiymet',compact('sagird','id','sd'));
    }

    public function qiymetSave(Request $request)
    {
        $new=new imtahan_netice;
        $new->sagird_id=$request->sd;
        $new->imtahan_id=$request->id;
        $new->imtahan_netice=$request->qiymet;
        $new->save();
        return back();
    }


    // ---------------------Admin Panel Functionlar---------------------
    public function indexAdmin()
    {
        $imtahanlar=imtahan::all();
        return view('admin.imtahanlar.index',compact('imtahanlar'));
    }
}
