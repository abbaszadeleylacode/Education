<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\sinif;
use App\sagird;
use App\muellim;
use App\muellim_sinif;
use App\valideynler;
class dersController extends Controller
{
    public function index()
    {
    	$sinifler=sinif::all();
    	return view('admin.sinifler.index',compact('sinifler','dersler'));
    }

    public function show($id)
    {
    	$sinif=sinif::find($id);
    	return view('admin.sinifler.show',compact('sinif'));
    }

    public function yarat()
    {
    	return view('admin.sinifler.new');
    }

    public function save(Request $request)
    {
        $this->validate($request,[
                'text'=>'required',
                ]);
    	$new = new sinif;
    	$new->text=$request->text;
    	$new->ders_cedveli= "/".$request->bir."/".$request->iki."/".$request->uc."/".$request->dord."/".$request->bes."/".$request->alti;

    	$new->save();
    	return back()->with('success','Sinif əlavə edildi');
    }

    public function delete($id)
    {
    	$delete=sinif::find($id);

    	$delete->delete();

    	return back();
    }

    public function yenile($id)
    {
        $sinif=sinif::find($id);
        return view('admin.sinifler.update',compact('sinif'));
    }

    public function update(Request $request)
    {
        sinif::find($request->id)->update($request->all());
        return back()->with('success','Dəyişdirildi!');
    }

    public function add($id)
    {
        
        $sinif=sinif::find($id);
        $sagirdler=sagird::where('sinif_id','=',$sinif->text)->get();
        return view('admin.sinifler.sagirdler',compact('sagirdler','sinif'));
    }

    public function addMuellim($id)
    {
        $sinif=sinif::find($id);
        $sinifMuellimleri=muellim_sinif::where('sinif_id',$id)->get();
        $muellimler=array();
        for($i=0;$i<count($sinifMuellimleri);$i++){
           $muellimId= $sinifMuellimleri[$i]->muellim_id;
           $muellim=muellim::where('id',$muellimId)->first();
           array_push($muellimler,$muellim);
        }
        return view('admin.sinifler.muellim',compact('muellimler','sinif'));
    }

    public function elaveet(Request $request,$id)
    {
        $name=$request->name;
        $surname=$request->surname;

        $sagird=sagird::where([['name',$name],['surname',$surname]])->first();

        $sinifAdi=sinif::find($id)->text;

        $sagird->sinif_id=$sinifAdi;
        $sagird->save();
        return back();
    }

    public function elaveetMuellim(Request $request,$id)
    {
        $name=$request->name;
        $surname=$request->surname;

        $muellim=muellim::where([['name',$name],['surname',$surname]])->first();
        $muellimId=$muellim->id;


        $sinifId=sinif::find($id)->id;

        

        $newSinif=new muellim_sinif;
        $newSinif->muellim_id=$muellimId;
        $newSinif->sinif_id=$sinifId;

        $newSinif->save();

        return back();
    }


    public function cixarMuellim($sd,$id)
    {
        $deleteMuellim=muellim_sinif::where([['muellim_id',$id],['sinif_id',$sd]])->first();
        $deleteMuellim->delete();
        return back();
    }

    public function cixar($id)
    {
        $sagird=sagird::find($id);
        $sagird->sinif_id='neytral';
        $sagird->save();
        return back();
    }


    // Muellim-panel ucun olan functionlar----------------------------------

    public function indexMuellim($id)
    {
        $sinifler=muellim_sinif::where('muellim_id',$id)->get();
        $classrooms=array();
        for($i=0;$i<count($sinifler);$i++){
            $sinifID=$sinifler[$i]->sinif_id;
            $class=sinif::find($sinifID);
            array_push($classrooms, $class);
            
        }
        return view('muellim.sinifler.index',compact('classrooms'));
    }

    public function showMuellim($id)
    {
        $sinif=sinif::find($id);
        return view('muellim.sinifler.show',compact('sinif'));
    }


    // Sagirdler ucun olan functionlar
    public function indexSagird()
    {
        $sagird=sagird::find($_SESSION['sagirdID'])->sinif_id;
        $sinif=sinif::where('text',$sagird)->first();
        return view('sagird.sinifler.index',compact('sinif'));
    }

    public function showSagird($id)
    {
        $sinif=sinif::find($id);
        return view('sagird.sinifler.show',compact('sinif'));
    }

    //Valideynler ucun olan functionlar

    public function indexValideyn()
    {
        $sagirdID=valideynler::find($_SESSION['valideynID'])->sagird_id;
        $sinifID=sagird::find($sagirdID)->sinif_id;
        $sinif=sinif::where('text',$sinifID)->first();
        return view('valideyn.sinifler.index',compact('sinif'));
    }
}
