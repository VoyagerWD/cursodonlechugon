<div class="container">
	<div class="row center-align">
		<?php if (isset($product)): ?>
		<h3><?= $product->nombre ?></h3>
		<div id="detail-product">
			<div class="image">
				<?php if ($product->imagen != null): ?>
					<img src="<?= $product->imagen ?>"  style="max-width: 400px; max-height: 400px;"/>
				<?php else: ?>
					<img src="<?= base_url ?>assets/img/camiseta.png" />
				<?php endif; ?>
			</div>
			<div class="data">
				<p class="description"><?= $product->descripcion ?></p>
				<p class="price">$ <?= $product->precio ?> por <?= $product->ventaPor ?></p>
				<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
			</div>
		</div>
	<?php else: ?>
		<h1>El producto no existe</h1>
	<?php endif; ?>
	</div>
</div>


	


