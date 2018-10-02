<!DOCTYPE html>
<html>
<head>
  <title>Problems Manager</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Sawarabi+Mincho" rel="stylesheet">
    <style>
    header { text-align: center;}h1 {font-family: Montserrat;} h2 {font: normal 1.5em Montserrat;} .signup {width: auto; border: 1px solid #999999; font: normal 1.5em Sawarabi Mincho; color: #444444} .subbutton {font-family: Helvetica; font-size: 1em; width:auto;} table {width: auto; text-align: center; margin-left: auto;margin-right: auto;margin-top: 100px; }
    </style>
  </head>
  <body>
    <header>
      <h1>Tech Help Requests Portal</h1>
      <p>Please login to continue</p>
    </header>

    <table class = "login" border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
      <th colspan="2" align="center"><h2>Login</h2></th>
      <form method="post" action="php/loginvalidate.php">
        <tr><td>Username</td>
          <td><input type="email" maxlength="32" name="username" required></td></tr>
        <tr><td>Password</td>
          <td><input type="password" maxlength="32" name="password" required></td>
        </tr><td><input class="subbutton" type="submit" name="submit" value="Login"></td></tr>
      </form>
    </table>



  </body>
</html>
