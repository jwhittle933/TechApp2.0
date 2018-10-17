@extends('layouts.master')

@section ('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section ('content')
@include ('layouts.nav')
<div class="form-group container" role="toolbar" aria-label="Toolbar with button groups">
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text " id="btnGroupAddon">First Name</div>
        </div>
        <input type="text" class="form-control" placeholder="First Name" aria-label="Input group example" aria-describedby="btnGroupAddon">
        <button type="button" class="btn btn-secondary">Update</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text " id="btnGroupAddon">Last Name</div>
        </div>
        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
        <button type="button" class="btn btn-secondary">Update</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend ">
        <div class="input-group-text" id="btnGroupAddon">Building</div>
        </div>
        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
        <button type="button" class="btn btn-secondary">Update</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text" id="btnGroupAddon">Room</div>
        </div>
        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
        <button type="button" class="btn btn-secondary">Update</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text" id="btnGroupAddon">Problem</div>
        </div>
        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
        <button type="button" class="btn btn-secondary">Update</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text" id="btnGroupAddon">Email</div>
        </div>
        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
        <button type="button" class="btn btn-secondary">Update</button>
    </div>

</div>
@endsection