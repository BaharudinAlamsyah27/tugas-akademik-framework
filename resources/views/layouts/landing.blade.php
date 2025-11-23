<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
</body>
</html>