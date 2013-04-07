<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @section('title')
            Urban Terrorists Bangladesh
        @show
    </title>
	
	<!-- this is geo bootstrap

    <link href="http://divshot.github.io/geo-bootstrap/swatch/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://divshot.github.io/geo-bootstrap/bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="http://divshot.github.io/geo-bootstrap/bootstrap/docs/assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link href="http://divshot.github.io/geo-bootstrap/test/bootswatch.css" rel="stylesheet"/>
	-->	

	<!-- this is bootbusiness bootstrap -->
	
    <link href="http://jobpixels.com/bootbusiness/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://jobpixels.com/bootbusiness/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="http://jobpixels.com/bootbusiness/css/font-awesome.css" rel="stylesheet"/>
    <link href="http://jobpixels.com/bootbusiness/css/boot-business.css" rel="stylesheet"/>

	<!-- this is flat ui
    <link href="/static/flat-free/css/bootstrap.css" rel="stylesheet"/>
    <link href="/static/flat-free/css/flat-ui.css" rel="stylesheet"/>
    <link href="/static/urtbd/main.css" rel="stylesheet"/>
	-->
    
	<script type="text/javascript" src="/static/flat-free/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/static/urtbd/main.js"></script>
    @yield('extra_head')
</head>
<body>
@include('layouts.navigation')


@yield('content')
</body>
</html>