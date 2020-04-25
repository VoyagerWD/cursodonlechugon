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
        <li><a href="registro.php">Registrarse</a></li>
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
  
   <!-- fin loguearse -->

  <div id="index-banner" class="parallax-container home">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        
        
       
        <!-- <div><img class="logoHome" src="logo.png"></div>
          <h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
        <div class="row center valign-wrapper mh-80">
          <div><img class="logoHome wi-100" src="logo.png">
            <h5 class="header col s12 light">El cultivo sin suelo. Un conjunto de técnicas que utilizamos para evitar un suelo libre de agroquimicos.</h5>
          </div>
        </div>
        <!--
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        -->
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m3 animated fadeInUp cartaProductos">
          <div class="card hoverable fondo-invisible">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator materialboxed" src="assets/img/productos/morada.png">
            </div>
            <div class="card-content fondo-trans">
              <span class="card-title activator grey-text text-darken-4 cardTitulo">Lechuga Morada<i class="hide-on-large-only material-icons right">add</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title white-text-text">Hidroponica<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m3 animated fadeInUp cartaProductos">
          <div class="card hoverable fondo-invisible">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator materialboxed" src="assets/img/productos/morada.png">
            </div>
            <div class="card-content fondo-trans">
              <span class="card-title activator grey-text text-darken-4 cardTitulo">Lechuga Morada<i class="hide-on-large-only material-icons right">add</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title white-text-text">Hidroponica<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m3 animated fadeInUp cartaProductos">
          <div class="card hoverable fondo-invisible">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator materialboxed" src="assets/img/productos/morada.png">
            </div>
            <div class="card-content fondo-trans">
              <span class="card-title activator grey-text text-darken-4 cardTitulo">Lechuga Morada<i class="hide-on-large-only material-icons right">add</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title white-text-text">Hidroponica<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

        <div class="col s12 m3 animated fadeInUp cartaProductos">
          <div class="card hoverable fondo-invisible">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator materialboxed" src="assets/img/productos/morada.png">
            </div>
            <div class="card-content fondo-trans">
              <span class="card-title activator grey-text text-darken-4 cardTitulo">Lechuga Morada<i class="hide-on-large-only material-icons right">add</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title white-text-text">Hidroponica<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

      </div>

      
      <div class="center-align"><span><a class="btn-floating btn-large waves-effect waves-light btnProductos" href=""><i class="material-icons">add</i></a></span></div>
      <div class="center-align masProductos"><span><a href="">Ver mas productos</a></span></div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper fondo-trans">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
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

  <script src="assets/js/myJs.js"></script>

  </body>
</html>
