<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nga backend</title>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/assets/vendor/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/assets/admin/dist/css/AdminLTE.min.css">
  
        <link rel="stylesheet" href="/assets/admin/dist/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="/assets/vendor/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="/assets/vendor/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap-daterangepicker/daterangepicker.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>NT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>HNT</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Bạn có 4 tin nhắn</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            ....
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>....?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="user-image" alt="User Image">
                  <span class="hidden-xs">Hoàng Ngọc Thắng</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="img-circle" alt="User Image">

                    <p>
                      Hoàng Ngọc Thắng - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </div>
                    <!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.0-9/65433994_2371782709769127_1807338013571678208_n.jpg?_nc_cat=109&_nc_oc=AQndjujF82xmBmkKbtc6lGdN5TIWmYXo3Judu9Wv3Lrs08Xg5MacgkEr2RVuKR-FKr34N-dX_Nu5YSGPIMI5t5tJ&_nc_ht=scontent.fhph1-2.fna&oh=b403dba86d2008aa04dd28709730d6fc&oe=5DD5F40F" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
           
            <li>
                <a href="{{route('categories.index')}}">
                    <i class="fa fa-sliders"></i>
                    <span>Categories (danh mục)</span>
                </a>
            </li>
            <li>
                <a href="{{route('posts.index')}}">
                    <i class="fa fa-file-text"></i>
                    <span>Posts ( Bài viết )</span>
                </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 8888
        </div>
        <strong>Copyright &copy; 2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
      </footer>

      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="/assets/vendor/raphael/raphael.min.js"></script>
    <script src="/assets/vendor/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="/assets/vendor/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/assets/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets/vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/assets/vendor/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/assets/vendor/moment/min/moment.min.js"></script>
    <script src="/assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/assets/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/assets/vendor/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/assets/admin/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/assets/admin/dist/js/demo.js"></script>
    </body>
</html>