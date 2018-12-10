@extends ('layouts.master')

@section('title', 'Request Manager')

@section ('style')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/reportform.css') }}" rel="stylesheet">
@endsection

@section ('content')
@include('layouts.nav')
<hr>

@if(Session::has('store'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Request Added!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('destroy'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Request Deleted!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('update'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      Update Success!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div id='request-form'>
    <form action='/requestmanager' method='POST'>
        {{ csrf_field() }}
        <table>
            <tr><td><label for='first_name'>First Name: </label></td>
            <td><input type='text' name='first_name' required></td></tr>
            <tr><td><label for='last_name'>Last Name: </label></td>
            <td><input type='text' name='last_name' required></td></tr>
            <tr><td><label for='building'>Building: </label></td>
            <td><input type='text' name='building' required></td></tr>
            <tr><td><label for='room'>Room: </label></td>
            <td><input type='text' name='room' required></td></tr>
            <tr><td><label for='problem'>Problem: </label></td>
            <td><textarea type='text' name='problem' required></textarea></td></tr>
            <tr><td><label for='email'>Email: </label></td>
            <td><input type='email' name='email' required></td></tr>
            <tr><td><input class="btn btn-outline-primary" type='submit' value='SUBMIT'></td></tr>
        </table>

        @if (count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

    </form>

    <div class='flex-requests'>
        @foreach ($requests as $request)
            <div class='entry' id={{$request->id}}>
                    <b>ID: </b> {{ $request->id }} <br>
                    <b>First Name: </b> {{ $request->first_name }} <br>
                    <b>Last Name: </b> {{ $request->last_name }} <br>
                    <b>Building: </b> {{ $request->building }} <br>
                    <b>Room: </b> {{ $request->room }} <br>
                    <b>Problem: </b> {{ $request->problem }} <br>
                    <b>Email: </b> {{ $request->email }} <br>
                    <b>Created At: </b> {{ $request->created_at->diffForHumans() }} <br>
                    <b>Updated At: </b> {{ $request->updated_at->diffForHumans() }}<br>
                    <a href="/requestmanager/{{ $request->id }}" class="badge badge-info">View</a>
            </div>
        @endforeach
    </div>

</div>
@include('layouts.footer')
@endsection

@section('script')
@endsection
