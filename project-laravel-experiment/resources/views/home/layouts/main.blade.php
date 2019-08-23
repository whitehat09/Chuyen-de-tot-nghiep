
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>title</title>
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

    <div >

    @include('Home.layouts.header');
    </div>
    <!-- đường kẻ bóng dưới menu -->
    <div style="border-bottom: 1px solid #e1e1e1;-webkit-box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.75);box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.75);">

    </div>
    <!-- đường kẻ bóng dưới menu -->





  



 @yield('content')
<div>
    @include('Home.layouts.footer');
</div>



<!-- jQuery -->
    <script type="text/javascript" src="js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>

</body>

</html>