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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adddoctors', 'AdminController@adddoctors')->name('adddoctors');
Route::get('/viewdoctors', 'AdminController@viewdoctors')->name('viewdoctors');
Route::post('/postdoctor', 'AdminController@postdoctor')->name('postdoctor');
Route::get('/edit/doctor/{id}', 'AdminController@edit')->name('edit');
Route::get('/deleted/doctor/{id}', 'AdminController@delete')->name('deleted');
Route::post('/update/doctor/{id}', 'AdminController@update')->name('update');
Route::get('/addnurses', 'AdminController@addnurses')->name('addnurses');
Route::get('/viewnurses', 'AdminController@viewnurses')->name('viewnurses');
Route::post('/postnurses', 'AdminController@postnurses')->name('postnurses');
Route::get('/delete/{id}', 'AdminController@deleted')->name('delete');
Route::get('/edite/nurse/{id}', 'AdminController@edited')->name('edit');
Route::post('/update/nurse/{id}', 'AdminController@updated')->name('update');
