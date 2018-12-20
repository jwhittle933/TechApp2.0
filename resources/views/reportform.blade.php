@extends ('layouts.master')


@section ('style')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('title', 'TechHelp Tech Request')

@section ('content')

@if(Session::has('store'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Thank You! We will tackle this issue ASAP
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class=" d-flex container jumbotron">
    <div class='request-form form-group'>
        <h1 class="display-3">Report a Problem</h1>
        <p class="lead ml-3">Submit a new request</p>
        <form action='/reportform' method='POST'>
            {{ csrf_field() }}
            <table>
                <tr><td><label for='first_name'>First Name: </label></td>
                <td><input class="form-control" type='text' name='first_name' required></td></tr>
                <tr><td><label for='last_name'>Last Name: </label></td>
                <td><input class="form-control" type='text' name='last_name' required></td></tr>
                <tr><td><label for='building'>Building: </label></td>
                <td><input class="form-control" type='text' name='building' required></td></tr>
                <tr><td><label for='room'>Room: </label></td>
                <td><input class="form-control" type='text' name='room' required></td></tr>
                <tr><td><label for='problem'>Problem: </label></td>
                <td><textarea class="form-control" type='text' name='problem' required></textarea></td></tr>
                <tr><td><label for='email'>Email: </label></td>
                <td><input class="form-control" type='email' name='email' required></td></tr>
                <tr><td><input class="btn btn-sm btn-outline-primary" type='submit' value='SUBMIT'></td></tr>
            </table>
        </form>
    </div>
</div>
@endsection


