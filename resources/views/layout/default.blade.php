<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
<meta charset="utf-8">
<title>@yield('title')</title>
</head>
<body>
@include('layout.header')

@yield('content')

@include('layout.footer')
</body>
</html>