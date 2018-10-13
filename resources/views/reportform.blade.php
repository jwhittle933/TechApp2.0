@extends ('layouts.master')


  @section ('style')
  <style>
    h1 {font-family: Cinzel;font-size: 4.5em;} a {text-decoration: none;color: inherit;}footer {background-color: #325D7F;color: #E7F2EA;height:auto;border: solid 5px #3C5D5E;} .signup {width: auto; border: 2px solid #999999; font: normal 1.5em Sawarabi Mincho; color: #444444; margin-left: auto; margin-right: auto; margin-top: 50px;margin-bottom: 50px;} .subbutton {font-family: Helvetica; font-size: 1em; width:auto;} header {margin-top: 0;display: inline-flex;width: 100%;border-bottom: solid 2px #223351;flex-wrap: wrap;justify-content: space-between;background-image: linear-gradient(to right, #fff, #6DB3BF);} header p {font-family: Sawarabi Mincho;} svg {height: 80px;width: 20px;margin-right: 7px;} ul {padding-left: 0;}.rotate {transform: rotate(90deg);transition: .5s;}.rotate-reset {transform: rotate(0deg);transition: .5s;} #menu {background-image: linear-gradient(to right, #fff, #6DB3BF);}#menu-div {display: flex;font-family: Lobster;font-size: 1.5em;margin-bottom: 0;background-image: linear-gradient(to right, #fff, #6DB3BF);}#menu-div p {flex-grow: 2}#menu-div svg:hover{cursor: pointer;}.menu-items {display: none;}#menu-items li {color: black;list-style: none;font-family: Montserrat;font-size: 1.25em;margin-left: 4px;padding: 2px;}.menu-items-view {display: none;background-color: #FFFDFA;position: absolute;left: 5px;top: 75px;width: 30%;border: solid 2px #6DB3BF;z-index: 1;box-shadow: 5px 5px 5px #67696E;}#item {flex: 2 0 75%;align-self: flex-end;margin-bottom: 15px;margin-top: 0;}
  </style>
  @endsection

  @section('title', 'TechHelp Report Form')

  @section ('content')
  <body>
      <div id="menu-div">
          <svg class=" svg rotate-reset"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" version="1.1" width="120px" height="120px">
          <g id="surface1">
          <path style=" fill:#DFF0FE;" d="M 1.5 17.5 L 38.5 17.5 L 38.5 22.5 L 1.5 22.5 Z "/>
          <path style=" fill:#4788C7;" d="M 38 18 L 38 22 L 2 22 L 2 18 L 38 18 M 39 17 L 1 17 L 1 23 L 39 23 Z "/>
          <path style=" fill:#DFF0FE;" d="M 1.5 7.5 L 38.5 7.5 L 38.5 12.5 L 1.5 12.5 Z "/>
          <path style=" fill:#4788C7;" d="M 38 8 L 38 12 L 2 12 L 2 8 L 38 8 M 39 7 L 1 7 L 1 13 L 39 13 Z "/>
          <path style=" fill:#DFF0FE;" d="M 1.5 27.5 L 38.5 27.5 L 38.5 32.5 L 1.5 32.5 Z "/>
          <path style=" fill:#4788C7;" d="M 38 28 L 38 32 L 2 32 L 2 28 L 38 28 M 39 27 L 1 27 L 1 33 L 39 33 Z "></svg>
          <p>Menu</p>
      </div>

        <div id="menu">
          <div id="menu-items" class="menu-items-view">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="https://twitter.com/sbtstech?lang=en" target="_blank">What do I need?</a></li>
              <li><a href="http://www.sbts.edu/services/campus-technology/" target="_blank">Campus Technology Home</a></li>
              <li><a href="http://www.sbts.edu" target="_blank">SBTS Home</a></li>
              <li><a href="php/requestmanager.php" target="_blank">Request Manager</a></li>
            </ul>
          </div>
        </div>

        <header>
          <h1 id="item">Tech Help @ SBTS</h1>
          <p id="item3">A quick help site when a technician is unavailable</p>
        </header>
      <main>
      <table class = "signup" border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
        <th colspan="2" align="center"><h2>Report a Problem</h2></th>
        <form method="post" action="php/forminput.php">
          <tr><td>First Name</td>
            <td><input type="text" maxlength="32" name="forename" placeholder="First Name"required></td></tr>
          <tr><td>Last Name</td>
            <td><input type="text" maxlength="32" name="surname" placeholder="Last Name"required></td></tr>
          <tr><td>Building Name</td>
            <td><input type="text" maxlength="16" name="buildingName" placeholder="Building Name"required></td></tr>
          <tr><td>Room Number</td>
            <td><input type="text" maxlength="16" name="roomNumber" placeholder="Room" required></td></tr>
          <tr><td>Problem</td>
            <td><textarea type="text" maxlength="200" name="problem" rows="10" cols= "50" placeholder ="Type your problem here..." required></textarea></td></tr>
          <tr><td>Email</td>
            <td><input type="email" maxlength="64" name="email" placeholder="name@emailserver.com"required></td></tr>
          <tr><td colspan="2" align="center"><input class="subbutton" type="submit" name="submit" value="Submit"></td></tr>
        </form>
      </table>
    </main>
    <footer>
      <div id="southern-links">
        <ul>
          <li>SBTS</li>
          <li>Canvas</li>
          <li>MySBTS</li>
        </ul>
      </div>
      <div id="other-links">
        <ul>
          <li>AlberMohler.com</li>
          <li>Campus Technology</li>
        </ul>
      </div>
    </footer>
    <script>
      $('svg').click(function(){
        $('.menu-items-view').slideToggle(800);
    })//end toggle click handler
    $('#menu-div svg').on("click", function (event) {
        $('.svg').toggleClass('rotate');
        $('.svg').toggleClass('rotate-reset');
    });//end animation click handler
    </script>
  </body>
  @endsection
