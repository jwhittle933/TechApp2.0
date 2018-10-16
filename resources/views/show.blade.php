@extends('layouts.master')

@section('title', 'Request #')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style> .entry { margin: 15px; padding: 5px; width: 30%; border: 2px solid lightblue; box-shadow: 5px 5px grey; font-family: Menlo; font-size: 1.25em; } .controls {margin-top: 50px; padding: 15px; border-top: 2px solid black} </style>
@endsection


@section('content')


<div class="controls">
    <form action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Delete this request</button>
    </form>
    <form action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-secondary">Update this request</button>
    </form>
</div>


@endsection

