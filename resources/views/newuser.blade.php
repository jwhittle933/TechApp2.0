@extends ('layouts.master')

@section('title', 'Request Manager')

@section ('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/newuser.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section ('content')
@include('layouts.nav')

<div class=' form-group newuser'>
    <form class="container form"  method="POST">
        <h1 class="display-4 mt-5">Add a new user</h1><br>
        {{ csrf_field() }}
        <label for="first_name"><b>First Name:</label></b>
        <input name="first_name" class="form-control" required><br>
        <label for="last_name"><b>Last Name:</label></b>
        <input name="last_name" class="form-control" required><br>
        <label for="email"><b>Email:</label></b>
        <input name="email" type="email" class="form-control" required><br>
        <label for="adminstrator"><b>Administrator: (True/False)</label></b>
        <input name="administrator" class="form-control" required><br>
        <label for="password"><b>Password:</label></b>
        <input name="password" class="form-control" required><br>
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>
</div>


@include('layouts.footer')
@endsection

@section('script')
@endsection