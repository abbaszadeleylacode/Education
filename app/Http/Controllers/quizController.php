<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\quiz;
use App\sinif;
class quizController extends Controller
{
	// Muellimler ucun olan functionlar
     public function indexMuellim()
    {
    	$quizzies=quiz::all();
    	return view('muellim.quiz.index',compact('quizzies'));
    }


    public function add()
    {
    	$sinifler=sinif::all();
    	return view('muellim.quiz.add',compact('sinifler'));
    }


    public function store(Request $request)
    {
        	$new=new quiz;
        	$new->name=$request->name;
        	$new->content=$request->content;
        	$new->sinif_id=sinif::find($request->sinif_id)->text;


 			if($request->hasFile('photo')){
	    		$file=$request->file('photo');
	    		$filename=time().'.'.$file->getClientOriginalExtension();
	    		$file->move('assets/images/quiz',$filename);
	    		$path='assets/images/quiz/'.$filename;
	    		$new->picture=$path;
	    	}

	    	$new->save();
	    	return back()->with('success','Quiz uğurla əlavə edildi');
    }    


    public function show($id)
    {
        $quiz=quiz::find($id);
        return view('muellim.quiz.show',compact('quiz'));
    }


    public function delete($id)
    {
        $quiz=quiz::find($id);
        $quiz->delete();
        return back();
    }

    public function edit($id)
    {
       $sinifler=sinif::all();
       $quiz=quiz::find($id);
       return view('muellim.quiz.edit',compact('quiz','sinifler'));
    }



    public function update(Request $request,$id)
    {
        $quiz=quiz::find($id);
        $quiz->name=$request->name;
        $quiz->content=$request->content;
        $quiz->sinif_id=sinif::find($request->sinif_id)->text;

        if($request->hasFile('photo')){
                $file=$request->file('photo');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/quiz',$filename);
                $path='assets/images/quiz/'.$filename;
                $quiz->picture=$path;
            }

        $quiz->save();
        return back()->with('success','Quiz uğurla yeniləndi');

    }


    // Admin ucun olan functionlar
     public function indexAdmin()
    {
        $quizzies=quiz::all();
        return view('admin.quiz.index',compact('quizzies'));
    }


    public function showAdmin($id)
    {
        $quiz=quiz::find($id);
        return view('admin.quiz.show',compact('quiz'));
    }
}
