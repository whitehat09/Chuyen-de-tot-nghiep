<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;// thư viên cho Validator
use App\Post;
use App\Category; // sử dụng biến nối dữu liệu từ bảng Category
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index',compact('posts')
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $post = new Post();
         $categories = Category::all(); // sử dụng dữu liệu của bảng category

        return view('admin.posts.create',[
            'post' => $post,
            'categories' => $categories 
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

       
        
         // dd($id_gv);
         $post = new Post([
            'title' => $request->get('title'),
            'description' => $request->get('description'),  
            'id_gv' => $request->get('id_gv'),  
            'img' =>  $nameFile,  
            'display_homepage' => $request->get('display_homepage') ? 1 : 0,
            'description' => $request->get('description'),  
            'featured' => $request->get('featured') ? 1 : 0 ,
            'status' => $request->get('status') ? 1 : 0, 
            'content' => $request->get('content'), 

        ]);
        
        $post->save();

        return redirect(route('posts.index'));     
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $post = Post::find($id);
        

        return view('admin.posts.edit',[
            'post' => $post ,
             
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
        $post = Post::find($id);
            
          
           
        $post->status = $request->get('status') ? 1 : 0;
        $post->display_homepage = $request->get('display_homepage') ? 1 : 0;
        $post->featured = $request->get('featured') ? 1 : 0;
    
        $post->title = $request->get('title');
        
        $post->description = $request->get('description');
        $post->content = $request->get('content');
    /*    $post->display_homepage = $request->get('display_homepage');
        $post->status = $request->get('status');*/
     
        if ($request->hasFile('uploadfile')) {

           $file = $request->file('uploadfile');

           $pathImg = '/uploads/'; // lưu file trong public/upload

           $nameFile = $pathImg.$file->getClientOriginalName();// trả về tên  đường dẫn/tên ví dụ /uploads/img
           $file->move(public_path().$pathImg, $nameFile);  // hàm move để lưu file với biến $path để lưu với đường dẫn mình muốn
           // public_path() hàm lưu về thưu mục
           $post->img =$nameFile ;
 
        }// có thể dùng else để echo khi chưa có file

       


       
        $post->save();
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post = Post::find($id);

        $post->delete();
  
        return redirect()->route('posts.index')->with('success',' successfully');
    }
}
