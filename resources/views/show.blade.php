@extends('layouts.master')

@section('title', 'Request #')

@section('style')
<style> .entry { margin: 15px; padding: 5px; width: 30%; border: 2px solid lightblue; box-shadow: 5px 5px grey; font-family: Menlo; font-size: 1em; } </style>
@endsection

@section('content')
<div>
    <a href="/requestmanager/delete">Delete this request</a><br>
    <a href="/requestmanager/update">Update this request</a>
</div>
@endsection


