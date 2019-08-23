<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;
use App\Category; 
class IndexController extends Controller
{
  
   public function index()
    {
     

        $categories = Category::all();
        return view('home.index.index', ['Categories' => $Categories]);
        return view('home.layouts.main', ['Categories' => $Categories]);
        $categories = Category::all();

        return view('home.layouts.main',[
            'categories' => $categories
        ]);
          return view('home.layouts.main',compact('categories')
        );
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    public function update(Request $request,$id)
    {
     
    }
    
    public function destroy(Request $request,$id)
    {
       
    }
}
