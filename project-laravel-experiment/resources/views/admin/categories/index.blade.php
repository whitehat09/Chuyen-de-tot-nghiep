@extends('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Danh mục
            <small>Danh sách</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li class="active">Danh mục</li>
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
                    <a href="{{route('categories.create')}}" type="button" class="btn btn-success"> <!--  gán chạy hàm create -->
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
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Delete</th>
                  <th>Image</th>
                  <th>Edit</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->title}}</td>
                  <td>{{$category->description}}</td>

                  <td>
                    <span class="label label-success">
                      đang hoạt động
                    </span>
                  </td>
                  <td>
					<form method="Post" action={{route('categories.destroy',$category->id)}}>
						@csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Xóa</button>
					</form>
                  	</td>
                    <td>
                      
                      <a href="" style="padding: 5px">
                        <img style="width: 100px ; height: 100px;" src="{{$category->img}}"  alt="img" name="img" >
                      </a>
                      
                    </td>
                  <td>


                  	<a href="{{route('categories.edit',$category->id)}}">
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
