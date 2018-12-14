@extends ('layouts.master')

@section('title', 'Profile')

@section ('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section ('content')
@include('layouts.nav')

<div id="profile">
    <profile
        :userid="'{{ $currentUser->id }}'"
        :name="'{{ $currentUser->name }}'"
        :email="'{{ $currentUser->email }}'"
        :administrator="'{{ $currentUser->administrator }}'"
        :streetaddress="'{{ $currentUser->streetaddress }}'"
    ></profile>
</div>

@include('layouts.footer')
@endsection

@section('script')
<script src="{{ asset('js/profile.js') }}"></script>
@endsection