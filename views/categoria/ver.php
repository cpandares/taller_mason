<?php if (isset($categoria)): ?>
	<h1><?= $categoria->nombre ?></h1>
	<?php if ($productos->num_rows == 0): ?>
		<p>No hay productos para mostrar</p>
	<?php else: ?>

		<?php while ($product = $productos->fetch_object()): ?>
			<div class="product">
				<div class="card card-product shadow">

					<div class="card-header"><h2><?= $product->nombre ?></h2></div>
					<div class="card-body p-1">
						<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
						<?php if ($product->imagen != null): ?>
							<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" class="image-product" />
						<?php else: ?>
							<img src="<?= base_url ?>assets/img/camiseta.png" />
						<?php endif; ?>
						
						</a>
					</div>
					<div class="card-footer p-1">
					<p><?= $product->precio ?></p>
						<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="btn btn-primary btn-block">Comprar</a>	
					</div>

				</div>
				
			
			</div>
		<?php endwhile; ?>

	<?php endif; ?>
<?php else: ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>