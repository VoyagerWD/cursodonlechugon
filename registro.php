<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Don Lechugon - Productos organicos</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- ANIMATE CSS --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
  <nav class="light-green darken-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="logo" src="logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Sobre Don Lechugon</a></li>
        <li><a href="#">Contacto</a></li>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">one</a></li>
          <li><a href="#!">two</a></li>
          <li class="divider"></li>
          <li><a href="#!">three</a></li>
        </ul>
        <li><a href="#" id="loguearse">Login</a></li>
        <li><a href="#">Registrarse</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!-- LOGUEARSE -->
  
  <div id="login-page" class="row hide">
    <div class="col s12 z-depth-6 card-panel center-align antesDelForm">
      <button class="left-align login-page">X</button>
      <form class="login-form">
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="#" class="btn waves-effect waves-light col s12">Login</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="#">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>  
  
  <div class="container">
    <div class="row" id="formRegistro">
        <form class="col s12" id="reg-form">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate" required>
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate" required>
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="empresa" type="text" class="validate" required>
              <label for="empresa">Empresa</label>
            </div>
            <div class="input-field col s6">
              <input id="cuit" type="text" class="validate" required>
              <label for="cuit">CUIT</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" minlength="6" required>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <div class="gender-male">
                <input class="with-gap" name="gender" type="radio" id="male" required />
                <label for="male">Male</label>
              </div>
              <div class="gender-female">
                <input class="with-gap" name="gender" type="radio" id="female" required />
                <label for="female">Female</label>
              </div>
            </div>

            <div class="input-field col s6">
              <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">Register
                <i class="material-icons right">done</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>

  <script src="js/myJs.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });
  </script>

  </body>
</html>
