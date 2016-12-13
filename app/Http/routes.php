<?php
session_start();
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('logins.sagird_login');
});

//----------------LOGINLER----------------
Route::get('/sagird-login', function () {
    return view('logins.sagird_login');
});
Route::get('/admin-login', function () {
    return view('logins.admin_login');
});
Route::get('/muellim-login', function () {
    return view('logins.muellim_login');
});
Route::get('/valideyn-login', function () {
    return view('logins.valideyn_login');
});

Route::get('/register', function () {
    return view('logins.qeydiyyat');
});


//----------------LOGIN CONTROLLER----------------
Route::post('/checkMuellim','loginController@muellim');
Route::post('/checkadmin','loginController@admin');
Route::post('/checksagird','loginController@sagird');



//----------------REGISTER CONTROLLER----------------
Route::post('/registercontrol','registerController@new');



//----------------Admin Panel----------------
if (isset($_SESSION['adminTrue'])) {
	Route::get('/admin-panel', function () {
	    return view('admin.index');
	}); 	

	Route::get('/accept/{id}','registerController@accept');
	Route::get('/reject/{id}','registerController@reject');
	Route::get('/showteleb/{id}','registerController@show');
	Route::post('/axtaristeleb', 'registerController@axtaris');
	//----------------Admin Panel Sagirdler----------------
	Route::get('/sagirdsiyahisi', 'sagirdController@index');
	Route::get('/telebsiyahisi', 'sagirdController@teleb');

		//----------------Sagirdler(ADMIN PANELDE)----------------
		Route::get('/showsagird/{id}', 'sagirdController@show');
		Route::get('/deletesagird/{id}', 'sagirdController@delete');
		Route::post('/axtaris', 'sagirdController@axtaris');

	//----------------Admin Panel Muellimler----------------
	Route::get('muellimsiyahisi','muellimController@index');
	Route::get('addteacher','muellimController@add');
	Route::post('saveteacher','muellimController@save');
	Route::post('axtarismuellim','muellimController@axtaris');
	Route::get('deletemuellim/{id}','muellimController@delete');
	Route::get('showmuellim/{id}','muellimController@show');

	//----------------Admin Panel Ders Cedveli----------------
	Route::get('derscedveli','dersController@index');
	Route::get('showsinif/{id}','dersController@show');
	Route::get('sinifyarat','dersController@yarat');
	Route::post('yaratsinif','dersController@save');
	Route::get('deletesinif/{id}','dersController@delete');
	Route::get('updatesinif/{id}','dersController@yenile');
	Route::post('update-sinif','dersController@update');
	Route::get('addsagird/{id}','dersController@add');
	Route::get('elaveet/{id}','dersController@elaveet');
	Route::get('sinifMuellimleri/{id}','dersController@addMuellim');
	Route::get('elaveetMuellim/{id}','dersController@elaveetMuellim');
	Route::get('cixar/{id}','dersController@cixar');
	Route::get('cixarMuellim/{sd}/{id}','dersController@cixarMuellim');
	//-----------------Admin Panel Imtahanlar----------------------
	Route::get('imtahanlar-admin','imtahanController@indexAdmin');
	//-----------------Admin Panel Valideynler----------------------
	Route::get('admin-parents','parentController@indexAdmin');
	Route::get('delete-valideyn/{id}','parentController@delete');
	Route::get('addparent','parentController@addValideyn');
	Route::get('showvalideyn/{id}','parentController@show');
	Route::post('savevalideyn','parentController@saveValideyn');
	Route::post('axtarisvalideyn','parentController@axtaris');

	//-----------------Admin Panel Yigincaqlar----------------------
	Route::get('meeting-admin','ceremonyController@indexAdmin');
	Route::get('show-yigincaq-admin/{id}','ceremonyController@showAdmin');

	//-----------------Admin Panel Quizler----------------------
	Route::get('quiz-admin','quizController@indexAdmin');
	Route::get('show-quiz-admin/{id}','quizController@showAdmin');

	//-----------------Admin Panel Elaqe----------------------
	Route::get('elaqe-admin','elaqeController@indexAdmin');
	Route::get('delete-mail-admin/{id}','elaqeController@delete');
	Route::post('send-mail','elaqeController@sendAdmin');
	Route::get('sent-admin','elaqeController@sentAdmin');
	Route::get('show-mail/{id}','elaqeController@showMail');
	Route::get('show-mail-qebul/{id}','elaqeController@showMailQebul');
}


if(isset($_SESSION['muellimTrue'])){
	Route::get('/muellim-panel', function () {
    	return view('muellim.index');
	});

	//----------------Muellim Panel----------------
	Route::get('muellim-panel/logout','loginController@logoutMuellim');//logout muellim;
	//----------------Muellim Panel Sagirdler----------------
	Route::get('sagird(muellim)','sagirdController@sagirdMuellim');
	Route::post('axtaris(muellim)','sagirdController@axtarisMuellim');
	Route::get('/showsagird(muellim)/{id}', 'sagirdController@showMuellim');
	Route::get('/qayib/{id}', 'sagirdController@qayib');

	//----------------Muellim Panel Muellimler----------------
	Route::get('muellim(muellim)','muellimController@indexMuellim');
	Route::post('axtarismuellim-muellim', 'muellimController@axtarisMuellim');
	Route::get('showmuellim-muellim/{id}','muellimController@showMuellim');

	//----------------Muellim Panel Sinifler(ders cedvelleri)----------------
	Route::get('sinifler-muellim/{id}','dersController@indexMuellim');
	Route::get('show-sinif-muellim/{id}','dersController@showMuellim');

	//----------------Muellim Panel Imtahanlar----------------
	Route::get('imtahanlar-muellim','imtahanController@indexMuellim');
	Route::get('addexam','imtahanController@imtahanElave');
	Route::post('save-exam','imtahanController@saveExam');
	Route::get('delete-exam/{id}','imtahanController@delete');	
	Route::get('qiymet-exam/{id}','imtahanController@qiymet');	
	Route::get('qiymet-sagird-muellim/{id}/{sd}','imtahanController@qiymetPersonal');	
	Route::post('qiymet-save','imtahanController@qiymetSave');	

	//-----------------Muellim Panel Valideynler----------------------
	Route::get('muellim-parents','parentController@indexMuellim');
	Route::get('showvalideyn-muellim/{id}','parentController@showMuellim');
	Route::post('axtarisvalideyn-muellim','parentController@axtarisMuellim');
	//-----------------Muellim Panel Yigincaqlar----------------------
	Route::get('meeting-muellim','ceremonyController@indexMuellim');
	Route::get('addmeeting','ceremonyController@addMeeting');
	Route::post('save-meeting','ceremonyController@saveMeeting');
	Route::get('delete-yigincaq/{id}','ceremonyController@delete');
	Route::get('show-yigincaq/{id}','ceremonyController@show');
	Route::get('update-yigincaq/{id}','ceremonyController@edit');
	Route::post('save-meeting-update/{id}','ceremonyController@save');
	//-----------------Muellim Panel Quizler----------------------
	Route::get('quiz-muellim','quizController@indexMuellim');
	Route::get('addquiz','quizController@add');
	Route::post('save-quiz','quizController@store');
	Route::get('show-quiz/{id}','quizController@show');
	Route::get('delete-quiz/{id}','quizController@delete');
	Route::get('edit-quiz/{id}','quizController@edit');
	Route::post('update-quiz/{id}','quizController@update');
	//-----------------Muellim Panel Elaqe----------------------
	Route::get('elaqe-muellim','elaqeController@indexMuellim');
	Route::get('delete-mail-muellim/{id}','elaqeController@delete');
	Route::post('send-muellim','elaqeController@sendMuellim');
	Route::get('sent-muellim','elaqeController@sentMuellim');
	Route::get('show-mail-muellim/{id}','elaqeController@showMailMuellim');
	Route::get('show-mail-qebul-muellim/{id}','elaqeController@showMailQebulMuellim');
}



	//----------------Sagird Panel----------------
	Route::get('/sagird-panel', function () {
	    return view('sagird.index');
	}); 	
		//----------------Sagirdler(Sagird PANELDE)----------------
		Route::get('/sagirdsiyahisi-sagird', 'sagirdController@indexSagird');
		Route::get('/showsagird-sagird/{id}', 'sagirdController@showSagird');
		Route::post('/axtaris-sagird', 'sagirdController@axtarisSagird');
		//-----------------Sagird Panel Quizler----------------------
		Route::get('quiz-sagird','quizController@indexSagird');
		Route::get('show-quiz-sagird/{id}','quizController@showSagird');
		//-----------------Sagird Panel Yigincaqlar----------------------
		Route::get('meeting-sagird','ceremonyController@indexSagird');
		Route::get('show-yigincaq-sagird/{id}','ceremonyController@showSagird');
		//----------------Sagird Panel Ders Cedveli----------------
		Route::get('derscedveli-sagird','dersController@indexSagird');
		Route::get('showsinif-sagird/{id}','dersController@showSagird');
		//----------------Sagird Panel Muellimler----------------
		Route::get('muellimsiyahisi-sagird','muellimController@indexSagird');
		Route::post('axtarismuellim-sagird','muellimController@axtarisSagird');
		Route::get('showmuellim-sagird/{id}','muellimController@showSagird');
		//-----------------Sagird Panel Valideynler----------------------
		Route::get('sagird-parents','parentController@indexSagird');
		//-----------------Admin Panel Elaqe----------------------
		Route::get('elaqe-sagird','elaqeController@indexSagird');
		Route::get('delete-mail-sagird/{id}','elaqeController@delete');
		Route::post('send-sagird','elaqeController@sendSagird');
		Route::get('sent-sagird','elaqeController@sentSagird');
		Route::get('show-mail-sagird/{id}','elaqeController@showMailSagird');
		Route::get('show-mail-qebul-sagird/{id}','elaqeController@showMailQebulSagird');