<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Lobster" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
      @yield('content')

    @yield('script')
</body>
</html>
