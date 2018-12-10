@extends('layouts.master')

@section('title', "Request")

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/show.css') }}" rel="stylesheet">
@endsection


@section('content')
@include ('layouts.nav')
<hr>
<div class="controls form-group">
  <div class='entry'>
      <label><b>ID: </b>{{ $id }}<br></label>
      <p><b>First Name: </b>{{ $first_name }}<br></p>
      <p><b>Last Name: </b>{{ $last_name }}<br></p>
      <p><b>Building: </b> {{ $building }}<br></p>
      <p><b>Room: </b> {{ $room }}<br></p>
      <p><b>Problem: </b> {{ $problem }}<br></p>
      <p><b>Email: </b> {{ $email }}<br></p>
      <p><b>Created At: </b> {{ $created_at }}<br></p>
      <p><b>Updated At: </b> {{ $updated_at }}<br></p>
      <form action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <button type="submit" class="btn btn-outline-danger">Delete</button>
      </form>
  </div>
  <div class='form-group update'>
      <form class="container form" action="{{ url('/requestmanager', ['id' => $id]) }}" method="POST">
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <p><b>ID: </b></label>{{ $id }}<br></p>
          <label for="first_name"><b>First Name: </label></b>
          <input name="first_name" class="form-control" value="{{ $first_name }}"><br>
          <label for="last_name"><b>Last Name: </label></b>
          <input name="last_name" class="form-control" value="{{ $last_name }}"><br>
          <label for="building"><b>Building: </label></b>
          <input name="building" class="form-control" value="{{ $building }}"><br>
          <label for="room"><b>Room: </label></b>
          <input name="room" class="form-control" value="{{ $room }}"><br>
          <label for="problem"><b>Problem: </label></b>
          <textarea name="problem" class="form-control">{{ $problem }}</textarea><br>
          <label for="email"><b>Email: </label></b>
          <input name="email" class="form-control" value="{{ $email }}"><br>
          <input type="hidden" name="id" value="{{$id}}">
          <button type="submit" class="btn btn-outline-secondary">Update</button>
      </form>
  </div>
</div>

@include ('layouts.footer')
@endsection
