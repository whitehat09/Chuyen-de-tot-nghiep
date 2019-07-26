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
Route::get('/index', function () {
    return view('fontend.index');
});
Route::get('/', function () {
    return view('home');
});
Route::get('goi', function () {
    return view('auth.login');
});



Route::get('nhanh1/{a?}', function ($a='null') {
    echo "Thắng Con &nbsp".$a;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');/*đường dẫn home trỏ tới bộ điều khiển ... tới hàm index*/

