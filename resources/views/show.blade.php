@extends('layouts.master')

@section('title', "Request")

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/show.css') }}" rel="stylesheet">
@endsection


@section('content')
@include ('layouts.nav')
<div class="controls form-group">
  <div class='container jumbotron'>
      <label class="lead">ID: {{ $id }}<br></label>
      <p class="lead">Name: {{ $first_name }} {{ $last_name }}<br></p>
      <p>Building: {{ $building }}<br></p>
      <p >Room:  {{ $room }}<br></p>
      <p>Problem:  {{ $problem }}<br></p>
      <p>Email:  {{ $email }}<br></p>
      <p>Created At: {{ $created_at }}<br></p>
      <p>Updated At:  {{ $updated_at }}<br></p>
      <form action="{{ url('/dashboard', ['id' => $id]) }}" method="POST">
          {{ method_field('DELETE') }}
          @csrf
          <button type="submit" class="btn btn-outline-danger">Delete</button>
      </form>
  </div>
  <div class='form-group update'>
      <form class="container form" action="{{ url('/dashboard', ['id' => $id]) }}" method="POST">
          {{ method_field('PATCH') }}
          @csrf
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
          <textarea name="problem" class="form-control" rows="10">{{ $problem }}</textarea><br>
          <label for="email"><b>Email: </label></b>
          <input name="email" type="email" class="form-control" value="{{ $email }}"><br>
          <input type="hidden" name="id" value="{{$id}}">
          <button type="submit" class="btn btn-outline-secondary">Update</button>
      </form>
  </div>
</div>

@include ('layouts.footer')
@endsection
