<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @section('title')
            Urban Terrorists Bangladesh
        @show
    </title>

    <link href="/static/flat-free/css/bootstrap.css" rel="stylesheet"/>
    <link href="/static/flat-free/css/flat-ui.css" rel="stylesheet"/>
    <link href="/static/urtbd/main.css" rel="stylesheet"/>

    <script type="text/javascript" src="/static/flat-free/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/static/urtbd/main.js"></script>
    @yield('extra_head')
</head>
<body>
@include('layouts.navigation')


@yield('content')
</body>
</html>