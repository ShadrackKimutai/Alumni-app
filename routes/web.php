<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/new', function () {
    return view('alumni/register');
});
Route::get('update', function () {
	return view('alumni.edit');
});

Route::resource('alumnis','AlumniController');

Auth::routes();
Route::group(['middleware' => ['web']], function () {

ROute::get('/home', 'HomeController@index' );

    Route::get('alumni-login', 'AlumniAuthController@login');

    Route::post('alumni-login', ['as'=>'alumni-login','uses'=>'AlumniAuthController@dologin']);

});
