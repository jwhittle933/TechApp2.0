@extends ('layouts.master')

  @section ('title', 'Problems Manager')
  @section ('style')
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <style>
    header { text-align: center;}h1 {font-family: Montserrat;} h2 {font: normal 1.5em Montserrat;} .signup {width: auto; border: 1px solid #999999; font: normal 1.5em Sawarabi Mincho; color: #444444} .subbutton {font-family: Helvetica; font-size: 1em; width:auto;} table {width: auto; text-align: center; margin-left: auto;margin-right: auto;margin-top: 100px;} .error { color: red; margin: 0 auto;  }
  </style>
  @endsection

    @section ('content')

    <header>
      <h1>Requests Portal</h1>
      <p>Please login to continue or return to the <a href="/">main page<a/></p>
    </header>


    <table class="login" border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
      <th colspan="2" align="center"><h2>Login</h2></th>

        @if(Session::has('error'))
          <p class="error">*Those credentials are not recognized. Please try again</p>
        @endif

      <form method="POST" action="/login">
        {{ csrf_field() }}
        <tr><td>Username</td>
          <td><input type="email" maxlength="32" name="username" required></td></tr>
        <tr><td>Password</td>
          <td><input type="password" maxlength="32" name="password" required></td>
        </tr><td><input class="subbutton" type="submit" name="submit" value="Login"></td></tr>
      </form>
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



    @endsection

