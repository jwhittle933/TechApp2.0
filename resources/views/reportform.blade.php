@extends ('layouts.master')


@section ('style')
  <style>
    h1 {font-family: Cinzel;font-size: 4.5em;} a {text-decoration: none;color: inherit;}footer {background-color: #325D7F;color: #E7F2EA;height:auto;border: solid 5px #3C5D5E;} .signup {width: auto; border: 2px solid #999999; font: normal 1.5em Sawarabi Mincho; color: #444444; margin-left: auto; margin-right: auto; margin-top: 50px;margin-bottom: 50px;} .subbutton {font-family: Helvetica; font-size: 1em; width:auto;} header {margin-top: 0;display: inline-flex;width: 100%;border-bottom: solid 2px #223351;flex-wrap: wrap;justify-content: space-between;background-image: linear-gradient(to right, #fff, #6DB3BF);} header p {font-family: Sawarabi Mincho;} svg {height: 80px;width: 20px;margin-right: 7px;} ul {padding-left: 0;}.rotate {transform: rotate(90deg);transition: .5s;}.rotate-reset {transform: rotate(0deg);transition: .5s;} #menu {background-image: linear-gradient(to right, #fff, #6DB3BF);}#menu-div {display: flex;font-family: Lobster;font-size: 1.5em;margin-bottom: 0;background-image: linear-gradient(to right, #fff, #6DB3BF);}#menu-div p {flex-grow: 2}#menu-div svg:hover{cursor: pointer;}.menu-items {display: none;}#menu-items li {color: black;list-style: none;font-family: Montserrat;font-size: 1.25em;margin-left: 4px;padding: 2px;}.menu-items-view {display: none;background-color: #FFFDFA;position: absolute;left: 5px;top: 75px;width: 30%;border: solid 2px #6DB3BF;z-index: 1;box-shadow: 5px 5px 5px #67696E;}#item {flex: 2 0 75%;align-self: flex-end;margin-bottom: 15px;margin-top: 0;}
  </style>
@endsection

@section('title', 'TechHelp Tech Request')

@section ('content')

      <header>
        <h1 id="item">Tech Help</h1>
        <p id="item3">A quick help site when a technician is unavailable</p>
      </header>

    <form action='/reportform' method='POST'>
      {{ csrf_field() }}
      <table class="signup" border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
          <th colspan="2" align="center"><h2>Technology Request</h2></th>
          <tr><td><label for='first_name'>First Name: </label></td>
          <td><input type='text' name='first_name' placeholder="First Name" required></td></tr>
          <tr><td><label for='last_name'>Last Name: </label></td>
          <td><input type='text' name='last_name' placeholder="Last Name"required></td></tr>
          <tr><td><label for='building'>Building: </label></td>
          <td><input type='text' name='building' placeholder="Building Name"required></td></tr>
          <tr><td><label for='room'>Room: </label></td>
          <td><input type='text' name='room' placeholder="Room" required></td></tr>
          <tr><td><label for='problem'>Problem: </label></td>
          <td><textarea type='text' name='problem' rows="10" cols= "50" placeholder ="Type your problem here..." required></textarea></td></tr>
          <tr><td><label for='email'>Email: </label></td>
          <td><input type='email' name='email' placeholder="name@emailserver.com" required></td></tr>
          <tr><td colspan="2" align="center"><input class="subbutton "type='submit' name="submit" value='SUBMIT'></td></tr>
      </table>
    </form>
@endsection


