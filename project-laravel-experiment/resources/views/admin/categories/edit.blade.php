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
        <!-- left column -->
        <div  style="padding: 10px;" >
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Danh mục</h3>
              <div  style="float: right;">
                  <a href="{{route('categories.index')}}" type="button" class="btn btn-success"> 
                      <span class="fa  fa-close"></span>
                      Quay lại
                  </a>
              </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action={{route('categories.update',$category->id)}}>
              @csrf <!-- Thêm dưới from  -->
              @method('PATCH')   <!-- Thêm dưới from  -->
              <div class="box-body">
                

                <div class="box collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Mô tả
                    <small>Simple and fast</small>
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
                  <label for="exampleInputEmail1">Tên danh mục</label>
                  <input name="title" type="text" class="form-control" placeholder="Nhập danh mục" value="{{ $category->title }}">

                  <button class="btn btn-primary" type="submit">Cập nhật</button> 
                </div>
                  <textarea placeholder="Description" class="form-control" style="height:100px" name="description" cols="50" rows="10" value="{{ $category->description }}" name="description"></textarea>
            
                  <button class="btn btn-primary" type="submit">Cập nhật</button> 
                </div>
            <!-- /description -->
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="uploadfile" >
                  <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
            </div>
              <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

              
              
            </form>
          </div>
          <!-- /.box -->
        </div>
        
        </div>

        </section>
        <!-- /.content -->
@endsection
