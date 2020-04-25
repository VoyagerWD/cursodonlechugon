<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha creado correctamentess</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>
	
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha borrado correctamenteee</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>


<div class="container">
	<div class="row">
		<h1 class="center-align">Gestión de productos</h1>

		<h4>
			<a href="<?=base_url?>producto/crear" class="button button-small">
			Crear producto
		</a>
		<a class="btn-floating btn-large waves-effect waves-light green" href="<?=base_url?>producto/crear"><i class="material-icons">add</i></a>
		</h4>

		<div class="container">
			<div class="row center-align">
				<div class="center-align">
					<table class="center-align">
						<thead class="center-align">
							<tr class="center-align">
								<th class="center-align">ID</th>
								<th class="center-align">NOMBRE</th>
								<th class="center-align">PRECIO</th>
								<th class="center-align">SE VENDE POR</th>
								<th class="center-align">STOCK</th>
								<th class="center-align">ACCIONES</th>
							</tr>
						</thead>
						<?php while($pro = $productos->fetch_object()): ?>
						<tbody class="center-align">
							<tr class="center-align">
								<td class="center-align"><?=$pro->id;?></td>
								<td class="center-align"><?=$pro->nombre;?></td>
								<td class="center-align"><?=$pro->precio;?></td>
								<td class="center-align"><?=$pro->ventaPor;?></td>
								<td class="center-align"><?=$pro->stock;?></td>
								<td class="center-align"><a href="<?=base_url?>producto/editar&id=<?=$pro->id?>"><i class="material-icons">edit</i></a><a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>"><i class="material-icons">delete</i></a></td>
							</tr>
						</tbody>
						<?php endwhile; ?>
					</table>
				</div>
			</div>
			
		</div>	
	</div>
</div>