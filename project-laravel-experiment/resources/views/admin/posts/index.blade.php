@extends('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Posts
            <small>Bài viết</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li class="active">Bài viết</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bảng thống kê</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <div class="input-group-btn">
                    <a href="{{route('posts.create')}}" type="button" class="btn btn-success"> <!--  gán chạy hàm create -->
                    	<span class="fa fa-plus"></span>
                    	Thêm mới
                	</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>ID GV(tác giả post)</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>content</th>
                  <th>Status (trạng thái)</th>
                  <th>featured(nổi bật)</th>
                  <th>Image</th>
                  <th>Delete</th>
                  <th>Edit</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                  <td>{{$post->id}}</td>
         
                 
                  <td><?= $post['category']['title'] ?></td>
              
                  <td>{{$post->title}}</td>
                  <td>{{$post->description}}</td>
                  <td>{{$post->content}}</td>
                  <td><span class="label label-success">
                  Đang hoạt động
                  </span></td>
                  <td>{{$post->featured}}</td>
                  <td>
                      
                      <a href="" style="padding: 5px">
                        <img style="width: 100px;height: 100px" src="{{$post->img}}"  alt="img" name="img" >
                      </a>
                      
                    </td>
                  
                  <td>
					<form method="Post" action={{route('posts.destroy',$post->id)}}>
						@csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">
                      Xóa
                    </button>
					</form>
                  	</td>
                    
                  <td>


                  	<a href="{{route('posts.edit',$post->id)}}">
                  		<span class="fa fa-edit"></span>
                  	</a>
                  </td>

                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        </section>
        <!-- /.content -->
@endsection
