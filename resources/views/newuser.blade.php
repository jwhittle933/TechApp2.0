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
    <form class="container form" action="/newuser" method="POST">
        <h1 class="display-4 mt-5">Add a New User</h1><br>
        {{ csrf_field() }}
        <label for="name"><b>Name:</label></b>
        <input name="name" class="form-control w-75" required><br>
        <label for="email"><b>Email:</label></b>
        <input name="email" type="email" class="form-control w-75" required><br>
        <label for="administrator"><b>Administrator (Check if True):</label></b>
        <input name="administrator" type="checkbox" value="True" class="mb-5"><br>
        <label for="password"><b>Password:</label></b>
        <input name="password" class="form-control w-75" required><br>
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>
</div>
<div class="jumbotron container">
    <h1 class="display-5 mb-5">Users Requesting Access</h1>
    @foreach($newusers as $newuser)
    <form action="/newuser/accept" method="POST">
        <div class="container">
            <h3>{{ $newuser->firstname }} {{ $newuser->lastname }}</h3>
            <p>{{ $newuser->email }}</p>
            <input type="hidden" name="firstname" value="{{ $newuser->firstname }}">
            <input type="hidden" name="lastname" value="{{ $newuser->lastname }}">
            <input type="hidden" name="email" value="{{ $newuser->email }}">
            <hr>
            <button type="submit" class="btn btn-success mb-5">Add</button>
            <button type="submit" class="btn btn-danger mb-5">Delete</button>
        </div>
    </form>
    @endforeach
</div>


@include('layouts.footer')
@endsection

@section('script')
@endsection