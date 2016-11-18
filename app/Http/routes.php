<?php

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

//----------------REGISTER CONTROLLER----------------
Route::post('/registercontrol','registerController@new');
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
