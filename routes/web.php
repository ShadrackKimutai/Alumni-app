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
    return view('welcome');
});

Route::get('/new', function () {
    return view('alumni/register');
});


Route::resource('alumnis','AlumniController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'teacher'], function() {
    Route::get('/home', 'HomeController@index');
});