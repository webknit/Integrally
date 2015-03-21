<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
 
<head>
	
	<meta charset="utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Integrally</title>
	
	<script>document.documentElement.className += ' advanced';</script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="/css/style.css" media="screen">
	
	<script src="//use.typekit.net/wxc4bli.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

</head>

<body>

	@include('includes.header')

	@yield('content')

	@include('includes.footer')

</body>

</html>