<div class="container">
	<div class="row">
		<?php if (isset($_SESSION['identity'])): ?>
			<h1>Hacer pedido</h1>
			<p>
				<a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
			</p>
			<br/>
			<h3>Dirección para el envio:</h3>
			<form action="<?=base_url.'pedido/add'?>" method="POST">
				<label for="provincia">Provincia</label>
				<input type="text" name="provincia" value="Buenos Aires" required />
				
				<label for="ciudad">Ciudad</label>
				<input type="text" name="localidad" value="Mar del Plata" required />
				
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" value="<?= $_SESSION['identity']->direcCalle." ". $_SESSION['identity']->direcAltura. " piso ". $_SESSION['identity']->piso. " depto ". $_SESSION['identity']->depto . " entre calles " . $_SESSION['identity']->esquina1 . " y " . $_SESSION['identity']->esquina2 ?>" required />
				
				<input type="submit" value="Confirmar pedido"/>
			</form>
				
		<?php else: ?>
			<h1>Necesitas estar identificado</h1>
			<p>Necesitas estar logueado en la web para poder realizar tu pedido.</p>
		<?php endif; ?>
	</div>
</div>
