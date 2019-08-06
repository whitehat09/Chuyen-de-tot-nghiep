<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){
    	return('layouts.admin.user');
    }

    public function store(Request $Request){
    	$allRequest = $Request->all();
    	$id_gv = $allRequest['id_gv'];
    	$title  =$allRequest['title'];
    	$img  =$allRequest['img'];
    	$description =$allRequest['description'];
    	$display_homepage = $allRequest['display_homepage'];
    	$featured = $allRequest['featured'];
    	$status = $allRequest['status'];
    	$content = $allRequest['content'];


    	$dataInsertToDatabase = array(
    		'id_gv' => $,
    		'email' => $email ,
    		'email_verified_at' => $email_verified_at ,
    		'password' = $password , 
    	);
    	$objUser = new User();
    	$objUser -> insert($dataInsertToDatabase);
    }
}
