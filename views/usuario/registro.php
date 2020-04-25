<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
  <strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
  <strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<div class="container">
    <div class="row" id="formRegistro">
        <form class="col s12" id="reg-form" action="<?=base_url?>usuario/save" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input id="nombre" type="text" class="validate" name="nombre" required>
              <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input id="apellidos" type="text" class="validate" name="apellidos" required>
              <label for="apellidos">Apellido</label>
            </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="empresa" type="text" class="validate" name="empresa" required>
              <label for="empresa">Empresa</label>
            </div>
            <div class="input-field col s6">
              <input id="cuit" type="text" class="validate" name="cuit">
              <label for="cuit">CUIT</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="telefono" type="tel" class="validate" name="telefono" required>
              <label for="telefono">Telefono</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="calle" type="text" class="validate" name="calle" required>
              <label for="calle">Calle</label>
            </div>
            <div class="input-field col s6">
              <input id="altura" type="text" class="validate" name="altura" required>
              <label for="altura">Altura</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="piso" type="text" class="validate" name="piso">
              <label for="piso">Piso</label>
            </div>
            <div class="input-field col s6">
              <input id="depto" type="text" class="validate" name="depto">
              <label for="depto">Depto</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="esq1" type="text" class="validate" name="esq1">
              <label for="esq1">Entre calle</label>
            </div>
            <div class="input-field col s6">
              <input id="esq2" type="text" class="validate" name="esq2">
              <label for="esq2">Y calle</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" minlength="6" name="password" required>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              
            </div>

            <div class="input-field col s6">
              <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">Registrarse
                <i class="material-icons right">done</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>