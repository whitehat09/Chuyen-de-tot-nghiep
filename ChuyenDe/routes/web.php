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


Route::get('trangcon',[
	'as'=>'trang-con',
	'uses'=>'pageController@getTrangcon']);

Route::get('trangchitiet',[
	'as'=>'trang-chi-tiet',
	'uses'=>'pageController@getTrangchitiet']);

Route::get('dangnhap',[
	'as'=>'dang-nhap',
	'uses'=>'pageController@getLogin']);

Route::get('dangki',[
	'as'=>'dang-ki',
	'uses'=>'pageController@getDangki']);


