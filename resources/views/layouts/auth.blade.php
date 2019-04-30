<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>{{ config('app.name') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css" media="all"/>
<!--icons-css-->
<link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!-- Ionicons -->
 <link rel="icon" type="image/icon" href="https://cdn2.iconfinder.com/data/icons/education-icons-4/200/SCHOOL15-512.png">
</head>
<body style="background: #34495e !important;">	

 @yield('content')

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights" style=" color: #ecf0f1 !important;">
	 <p style=" color: #ecf0f1 !important;">Copyright © {{ now()->year }}. Tous les droits sont réservés | Développé par <a href="#" target="_blank" style=" color: #ecf0f1 !important;">{{ config('app.copyright') }}</a> </p>
</div>	
<!--COPY rights end here-->
<!--js-->
<script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script> 
<!--scrolling js-->
<script src="{!! asset('js/jquery.nicescroll.js') !!}"></script>
<script src="{!! asset('js/scripts.js') !!}"></script>
<!--//scrolling js-->
<script src="{!! asset('js/bootstrap.js') !!}"> </script>
<!-- mother grid end here-->
</body>
</html>