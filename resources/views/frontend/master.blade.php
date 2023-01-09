<!DOCTYPE HTML>
<head>
<title>Free Ecomm Template Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!------ start style----->
@include('frontend.home.style')
<!------ start style----->
<!---start script----->
@include('frontend.home.script')
<!---start script----->
</head>
<body>
	<!-----------start Header ---------->
	@include('frontend.home.header')
    <!------------End Header ----------->
	<!-----start content------>
	@yield('content')
	<!-----end content--------->
	<!-----start footer----->
	@include('frontend.home.footer')
	<!------end footer---->
	@include('frontend.home.js')
</body>
</html>

