<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;// thư viên cho Validator
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $category = new Category();
        return view('admin.categories.create',[
            'category' => $category
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   // title không được bỏ trống
        // dd($request->all());
       

        Validator::make($request->all(), [
            'title' => 'required',
        ])->validate();

        // kiểm tra xem có tồn tại uploadfile
        if ($request->hasFile('uploadfile')) {

           $file = $request->file('uploadfile');

           $pathImg = '/uploads/'; // lưu file trong public/upload

           $nameFile = $pathImg.$file->getClientOriginalName();// trả về tên  đường dẫn/tên ví dụ /uploads/img
           $file->move(public_path().$pathImg, $nameFile);  // hàm move để lưu file với biến $path để lưu với đường dẫn mình muốn

        }// có thể dùng else để echo khi chưa có file

         $category = new Category([
            'title' => $request->get('title'),
            'description' => $request->get('description'),  
            'img' =>  $nameFile,   

        ]);

        $category->save();

        return redirect(route('categories.index'));     
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.categories.show');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
      /*  $img = Image::all()->where('post_id', '=', $id);*/
        

        return view('admin.categories.edit',[
            'category' => $category ,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $category->title = $request->get('title');
        
        $category->description = $request->get('description');
     

        if ($request->hasFile('uploadfile')) {

           $file = $request->file('uploadfile');

           $pathImg = '/uploads/'; // lưu file trong public/upload

           $nameFile = $pathImg.$file->getClientOriginalName();// trả về tên  đường dẫn/tên ví dụ /uploads/img
           $file->move(public_path().$pathImg, $nameFile);  // hàm move để lưu file với biến $path để lưu với đường dẫn mình muốn
           // public_path() hàm lưu về thưu mục
           $category->img =$nameFile ;

          /* dd($category->img);
 */
        }// có thể dùng else để echo khi chưa có file

       


       
        $category->save();
        return redirect(route('categories.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $category = Category::find($id);

        $category->delete();
  
        return redirect()->route('categories.index')->with('success',' successfully');
    }
}
