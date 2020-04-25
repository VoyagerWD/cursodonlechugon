<div class="container">
	<div class="row">
		<?php if(isset($edit) && isset($cat) && is_object($cat)): ?>
			<h1>Editar categoria <?=$cat->nombre?></h1>
			<?php $url_action = base_url."categoria/save&id=".$cat->id; ?>
			
		<?php else: ?>
			<h1 class="center-align">Crear nueva categoria</h1>
			<?php $url_action = base_url."categoria/save"; ?>
		<?php endif; ?>

		<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"  value="<?=isset($cat) && is_object($cat) ? $cat->nombre : ''; ?>" required/>
			
			<!-- <a type="submit">Guardar<i class="medium material-icons" type="submit">save</i></a>-->
			
			<input type="submit" value="Guardar" class="boton-guardar" />
		</form>
	</div>
</div>

