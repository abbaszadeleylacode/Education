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


//----------------PANELLER----------------
Route::get('/admin-panel', function () {
    return view('admin.index');
}); 	
//----------------LOGIN CONTROLLER----------------
Route::post('/checkMuellim','loginController@muellim');



//----------------REGISTER CONTROLLER----------------
Route::post('/registercontrol','registerController@new');
Route::get('/accept/{id}','registerController@accept');
Route::get('/reject/{id}','registerController@reject');
Route::get('/showteleb/{id}','registerController@show');
Route::post('/axtaristeleb', 'registerController@axtaris');


//----------------Admin Panel----------------
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
	Route::get('addsagird/{id}','dersController@add');
	Route::get('elaveet/{id}','dersController@elaveet');
	Route::get('sinifMuellimleri/{id}','dersController@addMuellim');
	Route::get('elaveetMuellim/{id}','dersController@elaveetMuellim');
	Route::get('cixar/{id}','dersController@cixar');
	Route::get('cixarMuellim/{sd}/{id}','dersController@cixarMuellim');
	//-----------------Admin Panel Imtahanlar----------------------
	Route::get('imtahanlar-admin','imtahanController@indexAdmin');


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
}