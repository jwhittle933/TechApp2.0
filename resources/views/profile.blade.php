@extends ('layouts.master')

@section('title', 'Profile')

@section ('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section ('content')
@include('layouts.nav')

<h1>this is the profile page.</h1>

@include('layouts.footer')
@endsection

@section('script')
@endsection