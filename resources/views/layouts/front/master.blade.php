<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>N-Air a E-commerce category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
		<!--bootstrap-->
			 <link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="{{asset('web/js/simpleCart.min.js')}}"></script>
		<!--default-js-->
			<script src="{{asset('web/js/jquery-2.1.4.min.js')}}"></script>
		<!--bootstrap-js-->
			<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
		<!--script-->

		@yield('scripts')
    </head>
    <body>
    @include('front.partials.topnav')
        
        @yield('content')
        
        @include('front.partials.footer')
        
    </body>
</html>