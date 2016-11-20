<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\sinif;
use App\sagird;

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

    public function update(Request $request,$id)
    {
        sinif::find($id)->update($request->all());
        return back()->with('success','Dəyişdirildi!');
    }

    public function add($id)
    {
        $sinif=sinif::find($id);
        $sagirdler=sagird::where('sinif_id','=',$sinif->text)->get();
        return view('admin.sinifler.sagirdler',compact('sagirdler','sinif'));
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

    public function cixar($id)
    {
        $sagird=sagird::find($id);
        $sagird->sinif_id='neytral';
        $sagird->save();
        return back();
    }
}
