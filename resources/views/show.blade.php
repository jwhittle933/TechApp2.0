@extends('layouts.master')

@section('title', 'Request #')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style> .entry { margin: 15px; padding: 5px; width: 30%; border: 2px solid lightblue; box-shadow: 5px 5px grey; font-family: Menlo; font-size: 1.25em; } .controls {margin-top: 50px; padding: 15px; } </style>
@endsection


@section('content')
@include ('layouts.nav')
<hr>
<div class='entry'>
    <b>ID: </b>{{ $id }}<br>
    <b>First Name: </b>{{ $first_name }}<br>
    <b>Last Name: </b>{{ $last_name }}<br>
    <b>Building: </b> {{ $building }}<br>
    <b>Room: </b> {{ $room }}<br>
    <b>Problem: </b> {{ $problem }}<br>
    <b>Email: </b> {{ $email }}<br>
    <b>Created At: </b> {{ $created_at }}<br>
    <b>Updated At: </b> {{ $updated_at }}<br>
</div>
<div class="controls">
    <form action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <form action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-secondary">Update</button>
    </form>
</div>

@include ('layouts.footer')
@endsection


