@extends('layouts.master')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@include('layouts.errornav')


@section('content')
<div id="error">
    <error></error>
</div>
@include('layouts.footer')
@endsection

@section('script')
<script src="{{ asset('js/404error.js') }}"></script>
@endsection