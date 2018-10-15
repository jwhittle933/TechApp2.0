@extends('layouts.master')

@section('title', 'Request #')

@section('style')
<style> .entry { margin: 15px; padding: 5px; width: 30%; border: 2px solid lightblue; box-shadow: 5px 5px grey; font-family: Menlo; font-size: 1em; } .controls {margin-top: 50px; padding: 15px; border-top: 2px solid black} </style>
@endsection

@section('content')
<div class="controls">
    <form action="{{ url('/requestmanager', ['id' => $id])}}" method="post">
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <button type="submit">Delete this request</button>
    </form>
    <form action="{{ url('/requestmanager', ['id' => $id])}}" method="post">
        <button type="submit">Update this request</button>
    </form>
</div>
@endsection


