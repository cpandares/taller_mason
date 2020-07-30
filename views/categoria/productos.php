<?php $categorias = Utils::showCategorias(); ?>

<h2>Listado de Productos</h2>
<?php if (isset($categoria)): ?>

	<?php if ($productos->num_rows == 0): ?>
		<p>No hay productos para mostrar</p>
	<?php else: ?>

		<?php while ($product = $productos->fetch_object()): ?>
				
				<div class="product">
					<a href="<?= base_url ?>categoria/ver&id=<?= $product->id ?>">
						<?php if ($product->imagen != null): ?>
							<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
						<?php else: ?>
							<img src="<?= base_url ?>assets/img/camiseta.png" />
						<?php endif; ?>
						<h2><?= $product->nombre ?></h2>
					</a>

				
					<a class="btn btn-success" href="<?=base_url?>categoria/ver&id=<?=$categoria->id?>">Ver</a>
					
					
				</div>
		<?php endwhile; ?>

	<?php endif; ?>
<?php else: ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>