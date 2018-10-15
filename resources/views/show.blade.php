@extends('layouts.master')

@section('title', 'Request #')

@section('style')
<style> .entry { margin: 15px; padding: 5px; width: 30%; border: 2px solid lightblue; box-shadow: 5px 5px grey; font-family: Menlo; font-size: 1em; } </style>
@endsection

@section('content')
<div>
    <form action="/requestmanager/{request}" method="delete">
        {{ csrf_field() }}
        <button type="submit" value="delete">Delete this request</button>
    </form>
    <form action="/requestmanager/{request}" method="patch">
        {{ csrf_field() }}
        <button type="submit" value="delete">Update this request</button>
    </form>
</div>
@endsection


