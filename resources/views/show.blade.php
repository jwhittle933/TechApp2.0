@extends('layouts.master')

@section('title', "Request")

@section('style')
<style> .entry { margin: 15px; padding: 5px; width: 45%; border: 2px solid lightblue; box-shadow: 5px 5px grey; font-family: Menlo; font-size: 1.25em; } .controls {margin-top: 50px; padding: 15px; display: flex} .update {margin: 15px; padding: 5px; font-family: Menlo;} label {display:inline-block; float:left; clear:left; text-align-right;} input {display:inline-block; float: right;}</style>
@endsection


@section('content')
@include ('layouts.nav')
<hr>
<div class="controls">
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
      <form action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <button type="submit" class="btn btn-danger">Delete</button>
      </form>
  </div>
  <div class='update'>
      <form action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <label><b>ID: </b></label>{{ $id }}<br>
          <label><b>First Name: </label></b><input name="first_name" value="{{ $first_name }}"><br>
          <label><b>Last Name: </label></b><input name="last_name" value="{{ $last_name }}"><br>
          <label><b>Building: </label></b><input name="building" value="{{ $building }}"><br>
          <label><b>Room: </label></b><input name="room" value="{{ $room }}"><br>
          <label><b>Problem: </label></b><input name="problem" value="{{ $problem }}"><br>
          <label><b>Email: </label></b><input name="email" value="{{ $email }}"><br>
          <input type="hidden" name="id" value="{{$id}}">
          <button type="submit" class="btn btn-secondary">Update</button>
      </form>
  </div>
</div>

@include ('layouts.footer')
@endsection
