@extends('layouts.master')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@include('layouts.errornav')


@section('content')
{{--  {{ csrf_field() }}  --}}
<div id="error">
    <error></error>
</div>
{{--  <h1>404 Not Found</h1>  --}}
@endsection

@section('script')
<script src="{{ asset('js/404error.js') }}"></script>
@endsection