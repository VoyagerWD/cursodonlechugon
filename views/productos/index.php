<div class="container">
	<div class="row">
		<h1 class="center-align">Gestionar categorias</h1>

		<h4>
			<a href="<?=base_url?>categoria/crear" class="button button-small">
			Crear categoria
		</a>
		<a class="btn-floating btn-large waves-effect waves-light red" href="<?=base_url?>categoria/crear"><i class="material-icons">add</i></a>
		</h4>

		<div class="container">
			<div class="row center-align">
				<div class="center-align">
					<table class="center-align">
						<thead class="center-align">
							<tr class="center-align">
								<th class="center-align">ID</th>
								<th class="center-align">NOMBRE</th>
								<th class="center-align">ACCIONES</th>
							</tr>
						</thead>
						<?php while($cat = $categorias->fetch_object()): ?>
						<tbody class="center-align">
							<tr class="center-align">
								<td class="center-align"><?=$cat->id;?></td>
								<td class="center-align"><?=$cat->nombre;?></td>
								<td class="center-align"><a href="#!"><i class="material-icons">edit</i></a><a href="#!"><i class="material-icons">delete</i></a></td>
							</tr>
						</tbody>
						<?php endwhile; ?>
					</table>
				</div>
			</div>
			
		</div>	
	</div>
</div>