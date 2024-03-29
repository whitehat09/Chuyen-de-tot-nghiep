
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nga backend</title>
    <link rel="shortcut icon" href="https://static.unica.vn/icon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css') }}">
    <link href="{{asset('css/bootstrap.css') }}" rel="stylesheet">
    
   


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://static.unica.vn/icon/favicon.ico">

    <meta name="language" content="vietnamese"/>
    
</head>
<body>
    <!-- head and body -->
<div style="min-height: calc(100vh - 377.5px);">
        
    @include('home.header')

    <div>
    <!-- nội dung -->
        <div >
            <div class="container">
        
                <div class="box-slide-">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>      
                        <div class="carousel-inner">
                            <div class="item active">
                                <img style="width: 100%"  src="https://unica.vn/upload/images/89025629_lam-ban-voi-con_thumb.png" alt="...">
                                <div class="carousel-caption">
                                ...
                                </div>
                            </div>
                            <div class="item">
                                <img style="width: 100%"  src="https://unica.vn/upload/images/90030028_de-cuoc-song-hon-nhan-luon-ngot-ngao_thumb.png" alt="...">
                                <div class="carousel-caption">
                                    ...
                                </div>
                            </div>
                        </div>

         
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" >
            <h4 style="text-align: center;font-size: 30px;font-weight: bold;margin: 15px;text-transform: uppercase;">
                HÔM NAY BẠN MUỐN HỌC GÌ ?
            </h4>
            <div class="row" >
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="border-radius: 5px; text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <img style="width: 100%" src="https://unica.vn/media/img/c8.png">
                    <p class="text-box-1" >Lĩnh Vực</p>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="border-radius: 5px; text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <img style="width: 100%" src="https://unica.vn/media/img/c7.png">
                    <p class="text-box-1" >Kỹ năng</p>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="border-radius: 5px; text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <img style="width: 100%" src="https://unica.vn/media/img/c6.png">
                    <p class="text-box-1" >Mục tiêu</p>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="border-radius: 5px; text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <img style="width: 100%" src="https://unica.vn/media/img/c5.png">
                    <p class="text-box-1" >Combo ưu đãi</p>
                </div>
            </div>    
        </div>

   
            
        <div class="container" style="margin-bottom: 20px;padding-top: 40px;" >
            <div class="row" >
                <!-- text slide -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol style="    padding-bottom: 40px;" class="carousel-indicators">
                        <li style="background-color: gray;width: 20px;" data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li style="background-color: gray;width: 20px;" data-target="#myCarousel" data-slide-to="1"></li>
                     
                    </ol>

                      <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                                <div style="background-color: #438a3b;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                                    <span>
                                        slide - text
                                    </span>
                                </div>
                    
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                                <div style="background-color: #31aaf3;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                                    <span>
                                        slide - text
                                    </span>
                                </div>
                    
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                                <div style="background-color:#a131f3;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                                    <span>
                                        slide - text
                                    </span>
                                </div>
                    
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                                <div style="background-color:#8a6d3b;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                                    <span>
                                        slide - text
                                    </span>
                                </div>
                    
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                                <div style="background-color:#f331ad;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                                    <span>
                                        slide - text
                                    </span>
                                </div>
                    
                            </div>

                            <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                                <div style="background-color: #438a3b;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                                    <span>
                                    slide - text
                                    </span>
                                </div>
                                
                            </div>
                        </div>

                        

                        <div class="item">
                          <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <div style="background-color: #438a3b;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                        <span>
                        slide - text
                    </span>
                    </div>
                    
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <div style="background-color: #31aaf3;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                        <span>
                        slide - text
                    </span>
                    </div>
                    
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <div style="background-color:#a131f3;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                        <span>
                        slide - text
                    </span>
                    </div>
                    
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <div style="background-color:#8a6d3b;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                        <span>
                        slide - text
                    </span>
                    </div>
                    
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <div style="background-color:#f331ad;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                        <span>
                        slide - text
                    </span>
                    </div>
                    
                </div>

                <div class="col-xs-6 col-sm-3 col-md-2 " style=" text-align: center;font-size: 17px;font-weight: bold;color: white;" >
                    <div style="background-color: #438a3b;border-radius: 5px; padding-top: 2px;padding-bottom: 2px;">
                        <span>
                        slide - text
                    </span>
                    </div>
                    
                </div>
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      
                      <a style="    width: 30px;border-radius: 5px; height: 28px; margin-left: 15px;" class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span style="font-size: 21px;" class="glyphicon glyphicon-chevron-left"></span>
                        
                      </a>
                      <a style="    width: 30px;border-radius: 5px; height: 28px;margin-right: 15px;" class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span style="font-size: 21px;" class="glyphicon glyphicon-chevron-right"></span>
                       
                      </a>
                    </div>
                <!-- end text slide -->
                



               


            </div>
    </div>
    <!-- box-2 -->
    <div style="background-color: #f4f4f4" >
        <div class="container">
            <div class="row" style="padding-top: 30px;">
                <div class="col-xs-12" style="text-align: center;padding-bottom: 20px;" >
                    <b style="font-size: 30px;">
                        ƯU ĐÃI HOT TRONG NGÀY
                    </b>
                    
                </div>
                <div style="border-radius: 10px;margin-bottom: 20px;" class="col-xs-12 col-sm-8 col-md-6" >
                    <img src="https://static.unica.vn/upload/images/2019/04/quan-tri-cuoc-doi-le-tham-duong_1555575906.jpg" style="width: 100%;border-radius: 10px;height: 269px;">
                </div>
                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/06/ky-nang-tim-viec-va-phong-van-thanh-cong_m_1561427707.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <div class="rate-course" style="display: inline-block;" itemscope="">
                                <span style="   color: #f26c4f;">
                                    <i class="fa fa-star-o co-or" aria-hidden="true"></i><i class="fa fa-star-o co-or" aria-hidden="true"></i><i class="fa fa-star-o co-or" aria-hidden="true"></i><i class="fa fa-star-o co-or" aria-hidden="true"></i><i class="fa fa-star-o co-or" aria-hidden="true"></i>  3
                                </span>
                            </div>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/06/nghe-thuat-phong-the-dinh-cao_m_1561520981.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Nghệ thuật Phòng the đỉnh cao
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Vera Hà Anh
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-sexy-dance-tu-co-ban-den-nang-cao_m_1555656459.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Học nhảy Sexy Dance từ cơ bản đến  ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Sweet Media
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    549,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    700,000                                                   
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_1555557477.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_1555557477.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_1555557477.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>
               

            </div>
            
        </div>
        
    </div>

     <!-- box-3 -->
     <div style="background-color: #f4f4f4;">
         <div class="container"  >
        <div class="row" >
            <div class="col-xs-6 col-sm-6 col-md-6">
                <p style="font-size: 27px; padding-left: 20px; font-weight: bold;">Danh Mục</p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <a style="float: right;padding-top: 10px;" href="#">
                    Xem tất cả >>
                </a>
            </div>
        </div>
        <div class="row">
            <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_1555557477.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_1555557477.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_1555557477.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div  class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 20px;" >
                    <div style="border-radius: 10px;height: 269px;background-color: white;">
                        <img style="width: 100%;    border-radius: 10px 10px 0 0;height: 108.5px; " src="https://static.unica.vn/upload/images/2019/04/facebook-marketing-a-z_1555557477.jpg">
                        <div style="padding-left: 10px;" >
                             <h3 class="title-course" style="font-size:15px;font-weight: 600;overflow: hidden;margin-top: 8px;">
                                <span>
                                    Kỹ năng tìm việc và phỏng vấn thành ...
                                </span>
                            </h3>
                            <div style="font-size: 12px; color: #555;  min-height: 18px;">
                                <b>
                                    Nguyễn Phan Anh 
                                </b>
                            </div>
                            <span class="star-rate" style="   color: #f26c4f;">
                                                         <i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i><i class="fa fa-star co-or" aria-hidden="true"></i>                                                    </span>
                            <div style="margin: 0 7px;padding-top: 35px;">
                                                <span style="font-size: 18px; font-weight: bold; float: right;">
                                                    239,000
                                                        <sup>
                                                            đ
                                                        </sup>
                                                </span>
                                                <span style="text-decoration: line-through;float: right;margin: 5px;color: #888;">
                                                    500,000                                                    
                                                    <sup>
                                                        đ
                                                    </sup>
                                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        
    </div>
     </div>
    
     <!--end box-3 -->

     <!--chinh phục mục tiêu của bạn -->
    <div style="background-color: #f1f1f1;">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12" >
                    <P style="text-align: center;font-size: 30px;font-weight: bold;" >
                        CHINH PHỤC MỤC TIÊU CỦA BẠN
                    </P>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4" >
                    <div style="background-image: url(https://cms.unica.vn/upload/images/062835_cbo-3-khoa-chung-khoan_thumb.jpg);border-radius: 10px; height: 180px;background-position: top center;background-repeat: no-repeat;background-size: cover;position: relative; margin-bottom: 20px;" >
                       <div  style="background-color: rgba(16, 15, 16, 0.65);position: absolute; top: 0;left: 0;width: 100%; height: 100%;border-radius: 10px; color: white;">
                            <div style="    width: 100%;padding-top: 113px;padding-left: 10px;">
                                <div class="col-xs-2" style="background-color: #f26c4f;border-radius: 10px;font-size: 30px;padding: 2px;text-align: center;padding-top: 7px;
    padding-bottom: 7px;">
                                 <i class="fas fa-child"></i>
                            </div>
                            <div class="col-xs-10">
                                <span style="font-size: 16px;font-weight: bold;">
                                Đầu tư chứng khoán chuyên nghiệp
                                </span>
                                <p> 
                                    3 Khóa học
                                </p>
                            </div>
                            </div>
                            
                           
                       </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" >
                    <div style="background-image: url(https://cms.unica.vn/upload/images/062122_combo-digital-marketing_thumb.jpg);border-radius: 10px; height: 180px;background-position: top center;background-repeat: no-repeat;background-size: cover;position: relative; margin-bottom: 20px;" >
                       <div  style="background-color: rgba(16, 15, 16, 0.65);position: absolute; top: 0;left: 0;width: 100%; height: 100%;border-radius: 10px; color: white;">
                            <div style="    width: 100%;padding-top: 113px;padding-left: 10px;">
                                <div class="col-xs-2" style="background-color: #f26c4f;border-radius: 10px;font-size: 30px;padding: 2px;text-align: center;padding-top: 7px;
    padding-bottom: 7px;">
                                 <i class="fas fa-child"></i>
                            </div>
                            <div class="col-xs-10">
                                <span style="font-size: 16px;font-weight: bold;">
                                    Combo digital marketing
                                </span>
                                <p> 
                                    6 Khóa học
                                </p>
                            </div>
                            </div>
                            
                           
                       </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" >
                    <div style="background-image: url(https://cms.unica.vn/upload/images/092307_combo-giao-tiep-tieng-anh-699k_thumb.jpg);border-radius: 10px; height: 180px;background-position: top center;background-repeat: no-repeat;background-size: cover;position: relative; margin-bottom: 20px;" >
                       <div  style="background-color: rgba(16, 15, 16, 0.65);position: absolute; top: 0;left: 0;width: 100%; height: 100%;border-radius: 10px; color: white;">
                            <div style="    width: 100%;padding-top: 113px;padding-left: 10px;">
                                <div class="col-xs-2" style="background-color: #f26c4f;border-radius: 10px;font-size: 30px;padding: 2px;text-align: center;padding-top: 7px;
    padding-bottom: 7px;">
                                 <i class="fas fa-child"></i>
                            </div>
                            <div class="col-xs-10">
                                <span style="font-size: 16px;font-weight: bold;">
                                    Giao tiếp tiếng anh như người bản xứ
                                </span>
                                <p> 
                                    3 Khóa học
                                </p>
                            </div>
                            </div>
                            
                           
                       </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" >
                    <div style="background-image: url(https://cms.unica.vn/upload/images/070906_nuoi-day-con-thanh-tai_thumb.jpeg);border-radius: 10px; height: 180px;background-position: top center;background-repeat: no-repeat;background-size: cover;position: relative; margin-bottom: 20px;" >
                       <div  style="background-color: rgba(16, 15, 16, 0.65);position: absolute; top: 0;left: 0;width: 100%; height: 100%;border-radius: 10px; color: white;">
                            <div style="    width: 100%;padding-top: 113px;padding-left: 10px;">
                                <div class="col-xs-2" style="background-color: #f26c4f;border-radius: 10px;font-size: 30px;padding: 2px;text-align: center;padding-top: 7px;
    padding-bottom: 7px;">
                                 <i class="fas fa-child"></i>
                            </div>
                            <div class="col-xs-10">
                                <span style="font-size: 16px;font-weight: bold;">
                                    Nuôi dạy con thành tài
                                </span>
                                <p> 
                                    2 Khóa học
                                </p>
                            </div>
                            </div>
                            
                           
                       </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" >
                    <div style="background-image: url(https://cms.unica.vn/upload/images/071020_combo-6-cong-cu-thiet-ke-do-hoa_thumb.jpg);border-radius: 10px; height: 180px;background-position: top center;background-repeat: no-repeat;background-size: cover;position: relative; margin-bottom: 20px;" >
                       <div  style="background-color: rgba(16, 15, 16, 0.65);position: absolute; top: 0;left: 0;width: 100%; height: 100%;border-radius: 10px; color: white;">
                            <div style="    width: 100%;padding-top: 113px;padding-left: 10px;">
                                <div class="col-xs-2" style="background-color: #f26c4f;border-radius: 10px;font-size: 30px;padding: 2px;text-align: center;padding-top: 7px;
    padding-bottom: 7px;">
                                 <i class="fas fa-child"></i>
                            </div>
                            <div class="col-xs-10">
                                <span style="font-size: 16px;font-weight: bold;">
                                    Làm chủ 6 công cụ thiết kế đồ họa
                                </span>
                                <p> 
                                    3 Khóa học
                                </p>
                            </div>
                            </div>
                            
                           
                       </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" >
                    <div style="background-image: url(https://cms.unica.vn/upload/images/070342_yoga-cb-giam-eo-giu-dang_thumb.jpg);border-radius: 10px; height: 180px;background-position: top center;background-repeat: no-repeat;background-size: cover;position: relative; margin-bottom: 20px;" >
                       <div  style="background-color: rgba(16, 15, 16, 0.65);position: absolute; top: 0;left: 0;width: 100%; height: 100%;border-radius: 10px; color: white;">
                            <div style="    width: 100%;padding-top: 113px;padding-left: 10px;">
                                <div class="col-xs-2" style="background-color: #f26c4f;border-radius: 10px;font-size: 30px;padding: 2px;text-align: center;padding-top: 7px;
    padding-bottom: 7px;">
                                 <i class="fas fa-child"></i>
                            </div>
                            <div class="col-xs-10">
                                <span style="font-size: 16px;font-weight: bold;">
                                    Giảm eo giữ dáng với Yoga
                                </span>
                                <p> 
                                    3 Khóa học
                                </p>
                            </div>
                            </div>
                            
                           
                       </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!--chinh phục mục tiêu của bạn -->
     <!--giảng viên tiêu biểu -->
     <div style="background-color: #f1f1f1;padding-top: 20px;padding-bottom: 40px;">
         <div class="container"  >
            <div class="row">
                <div class="col-xs-12" style="text-align: center;padding-bottom: 30px;" >
                    <b style="font-size: 30px;">
                        GIẢNG VIÊN TIÊU BIỂU 
                    </b>
                    
                </div>
            </div>
            <div class="row"  >
                <div class="col-xs-12 col-sm-6 col-md-3" >
                    <div style="background-color: white; border-radius: 10px;padding-top: 20px;padding-bottom: 40px;padding: 20px;" >
                        <center>
                            <img style="width: 153px; height: 153px; border-radius: 50%;border: 1px solid #f1f1f1; box-shadow: 1px 1px 1px #ccc;display: inline-block !important;" src="https://static.unica.vn/uploads/thaoptt09@gmail.com/August282017155pm_vera-ha-anh_thumb.jpg">
                            <div>
                                <p style="font-size: 20px;margin-bottom: 20px;margin-top: 20px;font-weight: bold; " >
                                    Vera Hà Anh
                                </p>
                                <p>
                                    Chuyên gia tâm lý, TGĐ Công ty Tư vấn Tâm Lý Đào VERA
                                </p>
                            </div>

                            
                        </center>
                    </div>                    
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3" >
                    <div style="background-color: white; border-radius: 10px;padding-top: 20px;padding-bottom: 40px;padding: 20px;" >
                        <center>
                            <img style="width: 153px; height: 153px; border-radius: 50%;border: 1px solid #f1f1f1; box-shadow: 1px 1px 1px #ccc;display: inline-block !important;" src="https://static.unica.vn/uploads/haketu@gmail.com/December620171133am_ha-ke-tu_thumb.jpg">
                            <div>
                                <p style="font-size: 20px;margin-bottom: 20px;margin-top: 20px;font-weight: bold; " >
                                    Hà Kế Tú
                                </p>
                                <p>
                                    Giảng viên Guitar - Youtuber nổi tiếng Cộng đồng guitar Việt Nam
                                </p>
                            </div>

                            
                        </center>
                    </div>                    
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3" >
                    <div style="background-color: white; border-radius: 10px;padding-top: 20px;padding-bottom: 40px;padding: 20px;" >
                        <center>
                            <img style="width: 153px; height: 153px; border-radius: 50%;border: 1px solid #f1f1f1; box-shadow: 1px 1px 1px #ccc;display: inline-block !important;" src="https://unica.vn/uploads/Thaoptt/August52016431pm_nguyen-hieu_thumb.jpg">
                            <div>
                                <p style="font-size: 20px;margin-bottom: 20px;margin-top: 20px;font-weight: bold; " >
                                    Nguyễn Hiếu
                                </p>
                                <p>
                                    Đại sứ Yoga Việt Nam - CEO Zenlife Yoga
                                </p>
                            </div>

                            
                        </center>
                    </div>                    
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3" >
                    <div style="background-color: white; border-radius: 10px;padding-top: 20px;padding-bottom: 40px;padding: 20px;" >
                        <center>
                            <img style="width: 153px; height: 153px; border-radius: 50%;border: 1px solid #f1f1f1; box-shadow: 1px 1px 1px #ccc;display: inline-block !important;" src="https://static.unica.vn/uploads/thaoptt09@gmail.com/February282018936am_ts-le-tham-duong_thumb.jpg">
                            <div>
                                <p style="font-size: 20px;margin-bottom: 20px;margin-top: 20px;font-weight: bold; " >
                                    Ts. Lê Thẩm Dương
                                </p>
                                <p>
                                    Tiến Sĩ - Diễn giả chuyên nghiệp - Chyên gia Tài chính, Lãnh đạo nhân sự ...
                                </p>
                            </div>

                            
                        </center>
                    </div>                    
                </div>
                
            </div>
              
        </div> 
        </div>
         
     <!--end giảng viên tiêu biểu -->
    
     <!--end nội dung -->
    </div>

    </div>
  <!-- end head and body-->



  <!-- footer -->
  <div class="box-footer" >
      @include('home.footer') 
      
  </div>
  <!-- end footer -->



    <!-- jQuery -->

    <script type="text/javascript" src="{{asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</body>

</html>