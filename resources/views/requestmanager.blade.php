@extends ('layouts.master')

@section('title', 'Request Manager')

@section ('style')
<style> table {border: 2px solid black;} #request-form {width: auto;} input{justify-content: flex-end;} </style>
@endsection

@section ('content')
<div id='request-form'>
    <form action='' method='post'>
        <table>
            <tr><td><label for='forename'>First Name: </label></td>
            <td><input type='text' name='forename'></td></tr>
            <tr><td><label for='surname'>Last Name: </label></td>
            <td><input type='text' name='surname'></td></tr>
            <tr><td><label for='building_name'>Building: </label></td>
            <td><input type='text' name='building_name'></td></tr>
            <tr><td><label for='room_number'>Room: </label></td>
            <td><input type='text' name='room_number'></td></tr>
            <tr><td><label for='problem'>Problem: </label></td>
            <td><input type='text' name='problem'></td></tr>
            <tr><td><label for='email'>Email: </label></td>
            <td><input type='email' name='email'></td></tr>
            <tr><td><input type='submit' value='SUBMIT FORM'></td></tr>
        </table>
    </form>
</div>
<div id="requests">

</div>
@endsection