@extends ('layouts.master')

@section('title', 'Classroom Info')

@section('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/classroominfo.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
@include('layouts.nav')

<h1>This is the classroom info page</h1>


@include('layouts.footer')
@endsection

@section('script')
@endsection