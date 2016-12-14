<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\imtahan;
use App\muellim;
use App\sinif;
use App\sagird;
use App\imtahan_netice;
use App\muellim_sinif;


class imtahanController extends Controller
{
    public function indexMuellim()
    {
    	$imtahanlar=imtahan::where('muellim_id',$_SESSION['muellimID'])->get();
    	return view('muellim.imtahanlar.index',compact('imtahanlar'));
    }

    public function imtahanElave()
    {
        $sinifler=muellim_sinif::where('muellim_id',$_SESSION['muellimID'])->get();
    	return view('muellim.imtahanlar.add',compact('sinifler'));
    }

    public function saveExam(Request $request)
    {
    	$sinif=sinif::where('text',$request->sinif_id)->first();
    	$sinifId=$sinif->text;

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
        $sagirdler=sagird::where('sinif_id',$sinifID)->get();

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

    //Sagirdler ucun olan functionlar
    public function indexSagird()
    {
        $sinif=sagird::find($_SESSION['sagirdID'])->sinif_id;
        $imtahanlar=imtahan::where('sinif_id',$sinif)->get();
        return view('sagird.imtahanlar.index',compact('imtahanlar'));
    }

    public function neticeSagird($id)
    {
        $imtahan=imtahan::find($id)->id;
        $netice=imtahan_netice::where([['imtahan_id',$imtahan],['sagird_id',$_SESSION['sagirdID']]])->first();
        return view('sagird.imtahanlar.netice',compact('netice'));

    }
}
