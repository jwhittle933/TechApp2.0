@extends ('layouts.master')

  @section ('title', 'Problems Manager')
  @section ('style')
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
  @endsection

    @section ('content')

    <header>
      <h1>Dashboard</h1>
      <p>Please login to continue or return to the <a href="/">main page<a/></p>
    </header>

    <div class="container-fluid login">
      <h2>Login</h2>

      @if(Session::has('error'))
        <p class="alert alert-danger">*The email or password are incorrect.</p>
      @endif

      <div class="form-group">
        <form method="POST" action="/login">
          {{ csrf_field() }}
          <p>Email</p>
          <input class="form-control w-75" type="email" maxlength="32" name="username" required>
          <p>Password</p>
          <input class="form-control w-75" type="password" maxlength="32" name="password" required>
          <input class="btn btn-outline-primary" type="submit" name="submit" value="Login">
        </form>
      </div>
    </div>

    <div class="container-fluid request">
      <h2>Request Access</h2>
      <p>If you are granted access, a user account will be created for you and you will be emailed the credentials</p>
      <div class="form-group">
          <form method="POST" action="/login">
            {{ csrf_field() }}
            <p>First Name</p>
            <input class="form-control w-75" type="email" maxlength="32" name="username" required>
            <p>Last Name</p>
            <input class="form-control w-75" type="email" maxlength="32" name="username" required>
            <p>Email</p>
            <input class="form-control w-75" type="email" maxlength="32" name="username" required>
            <input class="btn btn-outline-primary" type="submit" name="submit" value="Submit">
          </form>
        </div>
    </div>


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

