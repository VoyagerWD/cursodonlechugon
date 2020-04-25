<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
	<h1>Editar producto <?=$pro->nombre?></h1>
	<?php $url_action = base_url."producto/save&id=".$pro->id; ?>
	
<?php else: ?>
	<h1 class="center-align">Crear nuevo producto</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>
	

<div class="container">
    <div class="row" id="formRegistro">
        <form class="col s12" id="reg-form" action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s12">
              <input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>
              <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s12">
              <textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
              <label for="descripcion">Descripcion</label>
            </div>
          <div class="row">
            <div class="input-field col s6">
              <input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>
              <label for="precio">Precio</label>
            </div>
            <div class="input-field col s6">
              <select name="ventaPor">
    			      <option value="<?=isset($pro) && is_object($pro) ? $pro->ventaPor : 'KG'; ?>" selected disabled><?=isset($pro) && is_object($pro) ? $pro->ventaPor : 'Seleccione una opcion';?></option>
    			      <option value="KG">KG</option>
    			      <option value="Paquete">Paquete</option>
    			      <option value="Unidad">Unidad</option>
    			    </select>
			         <label for="ventaPor">Se vende por:</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
            	<input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : '1'; ?>"/>
              	<label for="stock">Stock</label>
            </div>
            <div class="input-field col s6">
              <select name="oferta">
    			      <option value="<?=isset($pro) && is_object($pro) ? $pro->oferta : 'No'; ?>" selected disabled><?=isset($pro) && is_object($pro) ? $pro->oferta : 'Si/No'; ?></option>
    			      <option value="Si">Si</option>
    			      <option value="No">No</option>
    			    </select>
			        <label for="oferta">¿En oferta?</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
             	 <?php $categorias = Utils::showCategorias(); ?>
        				<select name="categoria">
        					<?php while ($cat = $categorias->fetch_object()): ?>
        						<option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
        							<?= $cat->nombre ?>
        						</option>
        					<?php endwhile; ?>
        				</select>
             	 <label for="categoria">Categoria</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
    				<?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
    					<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb"/> 
    				<?php endif; ?>
				<input type="file" name="imagen" />
              <label for="imagen">Imagen</label>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field col s6">
              
            </div>

            <div class="input-field col s6">
              <button class="btn btn-large btn-register waves-effect waves-light" type="submit" name="action">Guardar
                <i class="material-icons right">done</i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>