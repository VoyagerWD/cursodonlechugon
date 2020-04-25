<div class="container">
	<div class="row">
		<?php if (isset($categoria)): ?>
			<h1 class="center-align"><?= $categoria->nombre ?></h1>
			<?php if ($productos->num_rows == 0): ?>
				<p>No hay productos para mostrar</p>
			<?php else: ?>

				<?php while ($product = $productos->fetch_object()): ?>
					<a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
						<div class="col s12 m3 animated fadeInUp cartaProductos">
							<div class="card hoverable fondo-invisible">
							  <div class="card-image waves-effect waves-block waves-light">
								    <?php if ($product->imagen != null): ?>
										<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
									<?php else: ?>
										<img src="<?= base_url ?>assets/img/camiseta.png" />
									<?php endif; ?>
							  </div>
							  <div class="card-content fondo-trans <?= ($verSi) ? "alto10":""; ?>">
							    <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
							    	<span class="card-title activator grey-text text-darken-4 <?= ($verSi) ? "cardTituloCategoria":"cardTitulo"; ?>"><?=$product->nombre?></span>
							    	<br>
							    </a>
						    	<span>$ <?=$product->precio?> </span><br>
						    	<span>por <?=$product->ventaPor?></span>
						    	<br>
						    	<h6>Comprar</h6>
						    	<h6>Ver mas</h6>
							  </div>
							  
							</div>
						</div>
					</a>
				<?php endwhile; ?>

			<?php endif; ?>
		<?php else: ?>
			<h1>La categoría no existe</h1>
		<?php endif; ?>

	</div>
</div>

