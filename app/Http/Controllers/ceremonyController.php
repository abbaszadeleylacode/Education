<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ceremony;
use App\sinif;

class ceremonyController extends Controller
{
	// Muellimler ucun olan functionlar
    public function indexMuellim()
    {
    	$meetings=ceremony::all();
    	return view('muellim.yigincaq.index',compact('meetings'));
    }

    public function addMeeting()
    {
    	$sinifler=sinif::all();
    	return view('muellim.yigincaq.add',compact('sinifler'));
    }

    public function saveMeeting(Request $request)
    {
    	ceremony::create($request->all());
    	return back()->with('success','Yığıncaq uğurla əlavə edildi');
    }

    public function delete($id)
    {
    	$meeting=ceremony::find($id);
    	$meeting->delete();
    	return back();
    }


    public function show($id)
    {
    	$meeting=ceremony::find($id);
    	return view('muellim.yigincaq.show',compact('meeting'));
    }


    public function edit($id)
    {
    	$sinifler=sinif::all();
    	$meeting=ceremony::find($id);
    	return view('muellim.yigincaq.edit',compact('meeting','sinifler'));
    }


    public function save(Request $request,$id)
    {
    	ceremony::find($id)->update($request->all());
    	return back()->with('success','Yığıncaq uğurla yeniləndi');
    }
}
