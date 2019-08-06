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
Route::get('Index',[
	'as'=>'trang-chu',
	'uses'=>'pageController@getIndex']);
<<<<<<< HEAD


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('trang-con',[
	'as'=>'trang-con',
	'uses'=>'pageController@getTrangCon']);
>>>>>>> 4f53f81b207c40a2a509b7bb7a4831e2e1ee3fde
