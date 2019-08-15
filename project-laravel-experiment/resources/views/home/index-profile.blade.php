<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

    <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css') }}">
   
	<title>Nga backend</title>
    <link rel="shortcut icon" href="https://static.unica.vn/icon/favicon.ico">

    <!-- Bootstrap CSS -->
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body style="font-family: inherit;">
	@include('home.header')
	<div class="head" style="background-image:  url(https://unica.vn/media/img/bg-db.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p style="color: white;font-size: 40px; margin-left: 40px;">
						Học Viên: Quỳnh Nga 
					</p>
					
					<!-- menu-profile -->
                   		<nav class="navbart" role="navigation">
							 <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							      
							    </div>

							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							      <ul class="nav navbar-nav" >
							      
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-book" aria-hidden="true"></i>
							        			<span>
							        				Khóa học
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-user" aria-hidden="true"></i>
							        			<span>
							        				Hồ sơ cá nhân
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-book" aria-hidden="true"></i>
							        			<span>
							        				Yêu thích
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-search-plus" aria-hidden="true"></i>
							        			<span>
							        				khám phá
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-gift" aria-hidden="true"></i>
							        			<span>
							        				Quà tặng(Gift)
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-money" aria-hidden="true"></i>
							        			<span>
							        				Nạp tiền
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-money" aria-hidden="true"></i>
							        			<span>
							        				Lịch sử đặt hàng
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        <li style="padding-right: 10px;">
							        	<a style="padding-bottom: 5px;" href="#">
							        		<p>
							        			<i class="fa fa-envelope-o" aria-hidden="true"></i>
							        			<span>
							        				Hộp thư
							        			</span>
							        		</p>	
							        	</a>
							        </li>
							        
							        
							      </ul>
							      
							      
							    </div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						
    			    <!-- end-menu-profile -->
				</div>

			</div>

		</div>
	</div>
	<main>
		<div class="container" style="padding-top: 20px;">
				<div  >
					<div class="panel panel-default">

						<div class="panel-heading col-md-12">
							<span style="font-weight: bold;"><i class="fa fa-user"></i>Thông tin cá nhân</span>
							<a href="https://unica.vn/dashboard/user/password" class="btn btn-warning margin-left pull-right "><i class="fa fa-lock"></i> Thay đổi mật khẩu</a>
						</div>
						  <div class="panel-body">
						  	<div class="row">
						  	
						  		<div class="col-md-6 col-sm-6">
						  			<div class="form-group " style="margin-bottom: 47px; ">
                        				<label style="margin-bottom: 10px;">Chọn ảnh đại diện</label>
                        					<br>
	                                    <img class="show_image" src="" style="width: 100px; height: 100px;">
		                                <div  class="absolute">
		                            		<div id="edit-avatar" role="button" class="GVb" style="-webkit-user-select: none;"></div>
		                            			<div class="form-group field-File">

													<input type="hidden" name="MUser[Avatar]" value=""><input type="file" id="File" name="MUser[Avatar]">

													
												</div>                       			
										</div>
										 <p style="margin-top:10px;">(Ảnh vuông và &lt;500KB)</p>
									</div>

                                      
                                    <div class="form-group">
		                        		<label >Thành phố</label>
		                       			<div class="form-group field-muser-city">

											<select  class="form-control" name="City" style="padding-left: 0px;">
											<option value="">Chọn thành phố</option>
											<option value="1">Cao Bằng</option>
											<option value="2">Bắc Ninh</option>
											<option value="3">Hà Giang</option>
											<option value="4">Lai Châu</option>
											<option value="5">Lào Cai</option>
											<option value="6">Bắc Kạn</option>
											<option value="7">Tuyên Quang</option>
											<option value="8">Hưng Yên</option>
											<option value="9">Phú Yên</option>
											<option value="10">Điện Biên</option>
											<option value="11">Yên Bái</option>
											<option value="12">Thái Nguyên</option>
											<option value="13">Sóc Trăng</option>
											<option value="14">Lạng Sơn</option>
											<option value="15">Vĩnh Phúc</option>
											<option value="16">Sơn La</option>
											<option value="17">Phú Thọ</option>
											<option value="18" selected="">Hà Nội</option>
											<option value="19">Bắc Giang</option>
											<option value="20">Quảng Ninh</option>
											<option value="22">Hải Dương</option>
											<option value="23">Hòa Bình</option>
											<option value="24">Hải Phòng</option>
											<option value="25">Hà Nam</option>
											<option value="26">Thái Bình</option>
											<option value="27">Ninh Bình</option>
											<option value="28">Nam Định</option>
											<option value="29">Thanh Hóa</option>
											<option value="30">Nghệ An</option>
											<option value="31">Hà Tĩnh</option>
											<option value="32">Quảng Bình</option>
											<option value="33">Quảng Trị</option>
											<option value="34">Thừa Thiên Huế</option>
											<option value="35">Đà Nẵng</option>
											<option value="36">Quảng Nam</option>
											<option value="37">Quảng Ngãi</option>
											<option value="38">Kon Tum</option>
											<option value="39">Bình Định</option>
											<option value="40">Gia Lai</option>
											<option value="42">Đăk Lăk</option>
											<option value="43">Khánh Hòa</option>
											<option value="44">Đăk Nông</option>
											<option value="45">Bình Phước</option>
											<option value="46">Lâm Đồng</option>
											<option value="47">Ninh Thuận</option>
											<option value="48">Tây Ninh</option>
											<option value="49">Bình Dương</option>
											<option value="50">Đồng Nai</option>
											<option value="51">Bình Thuận</option>
											<option value="52">TP.Hồ Chí Minh</option>
											<option value="53">Long An</option>
											<option value="54">Bà Rịa - Vũng Tàu</option>
											<option value="56">An Giang</option>
											<option value="57">Đồng Tháp</option>
											<option value="58">Tiền Giang</option>
											<option value="59">Cần Thơ</option>
											<option value="60">Bến Tre</option>
											<option value="61">Vĩnh Long</option>
											<option value="62">Kiên Giang</option>
											<option value="63">Hậu Giang</option>
											<option value="64">Trà Vinh</option>
											<option value="65">Bạc Liêu</option>
											<option value="68">Cà Mau</option>
											</select>
			
											
										</div>                    
									</div>
									<div class="form-group">
                        			<label>Địa chỉ</label>
                        				<div class="form-group field-muser-address">

											<input type="text"  class="form-control" name="[Address]" value="" style="padding-left: 0;">

											
										</div>
										                    			
									</div>

						  		</div>
						  		<div class="col-md-6 col-sm-6">
						  			<div class="form-group">
							  			<label>Họ và tên</label>
							  			<div class="form-group field-muser-fullname ">

											<input type="text" class="form-control" name="[Fullname]" value="Quỳnh Nga">

										</div>
						  			</div>
						  			<div class="form-group">
							  			<label>Email</label>
							  			<div class="form-group field-muser-email ">

											<input type="email" class="form-control" name="[Email]" value="">

										</div>
						  			</div>
						  			<div class="form-group">
							  			<label>Số điện thoại</label>
							  			<div class="form-group field-muser-phone ">

											<input type="text" class="form-control" name="[Phone]" value="">

										</div>
						  			</div>
						  			<div class="form-group">
							  			<label>Ngày sinh</label>
							  			<div class="form-group field-muser-phone ">

											<input type="text" class="form-control" name="[Phone]" value="">

										</div>
						  			</div>
						  			<div class="form-group">
							  			<label>Giới tính</label>
							  			<div class="form-group field-muser-phone ">

											<input type="text" class="form-control" name="[Phone]" value="">

										</div>
						  			</div>		 
								</div>

								<div class="col-md-6 col-sm-6">
									<div class="form-group">
									<button class="btn btn-success" style="margin-top: 30px; ;"><i class="fa fa-save"></i> Lưu lại</button>
									</div>	
								</div>
														    
					</div>
				</div>
			</div>
		</div>

	</main>
	@extends('home.footer')
	<!-- jQuery -->

    <script type="text/javascript" src="{{asset('js/app.css') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>								
</body>
</html>