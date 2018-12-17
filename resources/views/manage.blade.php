@extends('layouts.master')

@section('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
@include('layouts.nav')

<div id="manage">
    <div class="container mt-5">
        <table class="table table-sm table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Administrator</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->administrator }}</td>
                    <td>{{ $user->streetaddress }} {{ $user->city }} {{ $user->state }}</td>
                    <td>{{ $user->primaryphone }}</td>
                    <td><button class="btn btn-outline-info">Edit</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/manage.js') }}"></script>
@endsection