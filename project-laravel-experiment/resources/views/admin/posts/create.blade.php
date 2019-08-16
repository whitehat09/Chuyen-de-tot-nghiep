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
    <li class="active">Danh mục</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div  style="padding: 10px;" >
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Danh mục</h3>
          <div  style="float: right;">
            <a href="{{route('posts.index')}}" type="button" class="btn btn-success"> 
              <span class="fa  fa-close"></span>
              Quay lại
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form role="form" method="POST" enctype="multipart/form-data" action={{route('posts.store')}} > <!-- enctype khai báo khi có ảnh -->
          @csrf

          <div class="box-body">

           <div class="box collapsed-box">
            <div class="box-header">
              <h3 class="box-title"> Thêm bài viết
                <small>Nhấn dấu cộng để thêm</small>
              </h3>

              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                  <i class="fa fa-plus"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                    <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->

                <!-- description -->
                <div class="box-body pad" style="display: none;">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="">Danh mục</label>
                      <select name="id_gv" id="" class="form-control">
                        <option value="">Chọn danh mục</option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                      </select>
                      @if ($errors->has('id_gv'))
                                <div class="help-block">
                                    {{$errors->first('id_gv')}}
                                </div>
                            @endif
                    </div>
                    
                    <label for="exampleInputEmail1">Thêm tên tiêu đề</label>
                    <input value="" placeholder="Nhập tiêu đề tại đây" title=""
                    type="text" class="form-control" name="title"/>
                     
                    <textarea placeholder=" Nhập tiêu mô tả (Description) tại đây" class="form-control" style="height:100px"  cols="50" rows="10" name="description"></textarea>


                    <textarea placeholder="Nhập tiêu nội dung (content) tại đây" class="form-control" style="height:100px"  cols="50" rows="10" name="content"></textarea>
                      <p>status trang thái</p>
    
                    <div class="form-group">
                            <input type="checkbox" title="" name="status"
                                   class="minimal none-action">
                            
                        </div>
                    <p>display_homepage hiển thị trang chủ </p>
    
                    <div class="form-group">
                            <input type="checkbox" title="" name="display_homepage"
                                   class="minimal none-action">
                            
                        </div>
                        <p>nổi bật</p>
    
                    <div class="form-group">
                        <input type="checkbox" title="" name="featured"
                               class="minimal none-action">
                        
                    </div>

                   

                  </div>

                </div>
                <!-- /description -->
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="uploadfile" >

                <p class="help-block">Example block-level help text here.</p>
              </div>
              
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Áp dụng</button>
            </div>



          </form>
        </div>
        <!-- /.box -->
      </div>

    </div>

  </section>
  <!-- /.content -->
  @endsection
