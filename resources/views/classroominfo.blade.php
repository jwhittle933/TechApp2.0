@extends ('layouts.master')

@section('title', 'Profile')

@section('style')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
@include('layouts.nav')

<h1>This is the user profile page</h1>