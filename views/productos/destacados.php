<div class="container">
  <div class="section">

    <!--   Icon Section   -->
    <div class="row">


      <?php while($product = $productos->fetch_object()): ?> 
      <div class="col s12 m3 animated fadeInUp cartaProductos">
        <div class="card hoverable fondo-invisible">
          <div class="card-image waves-effect waves-block waves-light">
            <?php if($product->imagen != null): ?>
              <img class="activator materialboxed imgTamano" src="<?=$product->imagen?>">
          <?php else: ?>
            <img src="<?=base_url?>uploads/images/ssssss.png" />
          <?php endif; ?>
          </div>
          <div class="fondo-trans">
            <span class="activator grey-text text-darken-4 cardTitulo"><?=$product->nombre?><i class="hide-on-large-only material-icons right">add</i></span>
          </div>
          
            <div class="card-reveal" style="overflow: hidden;">
              <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                <span class="card-title white-text-text"><?=$product->nombre?><i class="material-icons right">close</i></span>
                <p style="overflow: hidden;"><?=$product->descripcion?></p>
                Ver mas
              </a>
            </div>
          
        </div>
      </div>
      <?php endwhile; ?>





    </div>

    
    <div class="center-align"><span><a class="btn-floating btn-large waves-effect waves-light btnProductos" href=""><i class="material-icons">add</i></a></span></div>
    <div class="center-align masProductos"><span><a href="">Ver mas productos</a></span></div>

  </div>
</div>