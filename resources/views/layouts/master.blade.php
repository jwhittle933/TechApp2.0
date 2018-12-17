<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Sawarabi+Mincho" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    {{--  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>  --}}
    @yield('style')
</head>
<body>
      @yield('content')

    @yield('script')
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
