
<div class="container">   
   <div class="header-box">
    <div >
        <div class="row" style="text-align: center;">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="box-logo" style="margin-top: 9px;">
                    <a href="#">
                        <img src="img/nga-backend.png"  style="height: 77px;width: 90%;" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-md-7 hidden-sm hidden-xs" style="margin-top: 23px;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm ">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6  col-xs-6 hidden-md hidden-lg " style="margin-top: 23px;">
                <div class="box-login" style="text-align: end;">
                    <a href="#">
                        <button class="btn btn-default btn-login" type="button" style="font-size: 19px;">
                            <i class="fas fa-user-circle"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs " style="margin-top: 23px;">
                <div class="box-login" style="text-align: end;">
                    <a href="http://127.0.0.1:8000/goi"><button class="btn btn-default btn-login" type="button" style="font-size: 19px;"><i class="fas fa-user-circle" style="margin-right: 5px "></i>  <span>Đăng Nhập</span></button></a>
                    
                </div>
            </div>
            <div class="hidden-md hidden-lg col-sm-12" style="margin-top: 23px;">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr">
    </div>
    <div class="">
        <nav class=" box-menu" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="    color: #777777;font-size: 15px;    line-height: 50px;" href="#">
                    <img src="https://i.vietnamdoc.net/data/image/icon/menu.png"  class="img-rounded hidden-sm hidden-xs" alt="Image">
                    Trang Chủ
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-right">
                   
                   @foreach(\App\Helpers\FunctionHelpers::getCategories() as $category)
                    <li>
                        <a href="#">
                            <img src="{{$category ->img}}" class="img-rounded" alt="img">
                            <span>{{$category ->title}}</span>
                        </a>
                    </li>
                     @endforeach                   
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>