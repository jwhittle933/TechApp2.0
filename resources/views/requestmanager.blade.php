@extends ('layouts.master')

@section('title', 'Request Manager')

@section ('style')
<style> table {border: 2px solid black;} #request-form {width: auto;} input{justify-content: flex-end;} .flex-requests{ display:flex; flex-wrap: wrap;} .entry { margin: 15px; padding: 5px; width: 30%; border: 2px solid lightblue; box-shadow: 5px 5px grey; font-family: Menlo; font-size: 1em; } .entry:hover { margin: 10px; box-shadow: 5px 5px grey; cursor: pointer;}</style>
@endsection

@section ('content')
<div id='request-form'>
    <form action='/requestmanager' method='POST'>
        {{ csrf_field() }}
        <table>
            <tr><td><label for='first_name'>First Name: </label></td>
            <td><input type='text' name='first_name'></td></tr>
            <tr><td><label for='last_name'>Last Name: </label></td>
            <td><input type='text' name='last_name'></td></tr>
            <tr><td><label for='building'>Building: </label></td>
            <td><input type='text' name='building'></td></tr>
            <tr><td><label for='room'>Room: </label></td>
            <td><input type='text' name='room'></td></tr>
            <tr><td><label for='problem'>Problem: </label></td>
            <td><textarea type='text' name='problem'></textarea></td></tr>
            <tr><td><label for='email'>Email: </label></td>
            <td><input type='email' name='email'></td></tr>
            <tr><td><input type='submit' value='SUBMIT'></td></tr>
        </table>
    </form>
</div>
<div id="requests">

</div>
@endsection