@extends ('layouts.master')

  @section ('title', 'Access')
  @section ('style')
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  @endsection

  @section ('content')
  <div class="jumbotron mt-5">
    <h1>Your priviledges are under review and you will be notified if access is granted.</h1>
    <p><a href="/login">Go back</a></p>
  </div>

  @endsection