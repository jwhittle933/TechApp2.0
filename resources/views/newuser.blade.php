@extends ('layouts.master')

@section('title', 'Request Manager')

@section ('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/newuser.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section ('content')
@include('layouts.nav')


@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        User Added!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class=' form-group newuser'>
    <form class="container form" action="/newuser" method="POST">
        <h1 class="display-4 mt-5">Add a New User</h1><br>
        {{ csrf_field() }}
        <label for="name"><b>Name:</label></b>
        <input name="name" class="form-control w-75" required><br>
        <label for="email"><b>Email:</label></b>
        <input name="email" type="email" class="form-control w-75" required><br>
        <label for="administrator"><b>Administrator Priviledges:</label></b>
        <input name="administrator" type="checkbox" value="True" class="mb-5"><br>
        <label for="password"><b>Password:</label></b>
        <input name="password" type="password" class="form-control w-75" required><br>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</div>
<div class="jumbotron container">
    <h1 class="display-5 mb-5">Requesting Access</h1>
    @foreach($newusers as $newuser)
    <form action="/newuser/admin" method="POST">
        <div class="container">
            <h3>{{ $newuser->firstname }} {{ $newuser->lastname }}</h3>
            <p>Access ID: {{ $newuser->id }}</p>
            <p>Email: {{ $newuser->email }}</p>
            <label for="administrator"><b>Administrator Priviledges:</label></b>
            <input name="administrator" type="checkbox" value="True" class="mb-5"><br>
            <input type="hidden" name="name" value="{{ $newuser->firstname }} {{ $newuser->lastname }}">
            <input type="hidden" name="email" value="{{ $newuser->email }}">
            <button type="submit" class="btn btn-success mb-5">Add</button>
            {{--  <input type="hidden" name="delete" value="delete">
            <input type="hidden" name="id" value="{{ $newuser->id }}">  --}}
            <button type="submit" class="btn btn-danger mb-5">Delete</button>
            <hr>
        </div>
    </form>
    @endforeach
</div>


@include('layouts.footer')
@endsection

@section('script')
@endsection