<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;// thư viên cho Validator
use App\Post;
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
        $posts = post::all();

        return view('admin.posts.index',[
            'posts' => $posts
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $post = new Post();
        return view('admin.posts.create',[
            'post' => $post
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

         $post = new Post([
            'title' => $request->get('title'),
            'id_gv'=>'id_gv',
            'img' =>  $nameFile,  
            'description' => $request->get('description'),  
            'display_homepage' => 'display_homepage',
            'featured' => 'featured',
            'status' => 'status',
            'content' => 'content',
             

        ]);

        $post->save();

        return redirect(route('post.index'));     
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
      /*  $img = Image::all()->where('post_id', '=', $id);*/
        

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
        $post->title = $request->get('title');
        $post->save();
        $post->description = $request->get('description');
        $post->save();

        if ($request->hasFile('uploadfile')) {

           $file = $request->file('uploadfile');

           $pathImg = public_path().'/uploads/'; // lưu file trong public/upload

           $nameFile = $file->getClientOriginalName();// trả về tên

           $file->move($pathImg, $nameFile);

        }// có thể dùng else để echo khi chưa có file



        $post->img = $post->get('img');
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
