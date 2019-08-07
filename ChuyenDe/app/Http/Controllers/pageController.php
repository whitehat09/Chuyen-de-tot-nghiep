<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
     public function getIndex()
    {
    	return view('page.trang-chu');
    }
     public function getTrangCon()
    {
    	return view('page.trangcon');
    }
    public function getTrangchitiet(){
    	return view('page.trang-chi-tiet');
    }
}
