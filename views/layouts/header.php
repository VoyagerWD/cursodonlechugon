<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Don Lechugon - Productos organicos</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?=base_url?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?=base_url?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- ANIMATE CSS --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
  <nav class="light-green darken-2" role="navigation">
    <a id="logo-container" href="<?=base_url?>" class="brand-logo"><img class="logo" src="<?=base_url?>logo.png"></a>
    <div class="nav-wrapper container">
      <ul class="right hide-on-med-and-down">
        <li><a href="<?=base_url?>">Home</a></li>
        <li><a href="<?=base_url?>">Productos</a>
          <ul class="subMenu">
            <?php $categorias = Utils::showCategorias(); ?>
            <?php while($cat = $categorias->fetch_object()): ?>
            <li><a href="<?=base_url?>/categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a></li>
            <?php endwhile; ?>
          </ul>
        </li>
        <li><a href="<?=base_url?>">Sobre Don Lechugon</a></li>
        <li><a href="<?=base_url?>">Contacto</a></li>
        <?php if(!isset($_SESSION['identity'])): ?>
          <li><a id="loguearse">Login</a></li>
          <li><a href="<?=base_url?>usuario/registro">Registrarse</a></li>
        <?php elseif($_SESSION['identity']->empresa == 'No registra'): ?>
          <li><a href="<?=base_url?>usuario/logout">Cerrar sesion</a></li>
          <li><b><?=$_SESSION['identity']->nombre?></b></li>
          <?php else: ?>
            <?php if(!isset($_SESSION['admin'])): ?>
            <li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
            <?php endif; ?>
           <?php if(isset($_SESSION['admin'])): ?>
                <li>Gestionar
                  <ul class="subMenu">
                    <li><a href="<?=base_url?>pedido/gestion">Pedidos</a></li>
                    <li><a href="<?=base_url?>categoria/index">Categorias</a></li>
                    <li><a href="<?=base_url?>producto/gestion">Productos</a></li>
                  </ul>
                </li>
           <?php endif; ?>
          <li><a href="<?=base_url?>usuario/logout">Cerrar sesion</a></li>
          <li><b><?=$_SESSION['identity']->empresa?></b></li>
        <?php endif; ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="<?=base_url?>">Navbar Link</a></li>
      </ul>
      <a href="<?=base_url?>" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!-- LOGUEARSE -->
  
  <div id="login-page" class="row hide">
    <div class="col s12 z-depth-6 card-panel center-align antesDelForm">
      <button class="left-align login-page">X</button>
      <form class="login-form" method="POST" action="<?=base_url?>usuario/login">
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input class="validate" id="email" type="email" name="email">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recordarme</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?=base_url?>usuario/registro">Registrarse ahora!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="#">¿Olvidaste la contraseña?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>  