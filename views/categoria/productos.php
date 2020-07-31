

<h2 class="text-center">Listado de Productos</h2>
<hr>
<?php if (isset($categoria)): ?>

	<?php if ($productos->num_rows == 0): ?>
		<p>No hay productos para mostrar</p>
	<?php else: ?>

		<?php while ($product = $productos->fetch_object()): ?>
				
				<div class="product">
					<div class="card-group ">
						<div class="card shadow card-product">
							<div class="card-header text-center"><h2><?= $product->nombre ?></h2></div>
							<a href="<?= base_url ?>categoria/ver&id=<?= $product->categoria_id ?>">	
							<div class="card-body p-1">
								<?php if ($product->imagen != null): ?>
								<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" class="image-product"/>
									<?php else: ?>
										<img src="<?= base_url ?>assets/img/camiseta.png" />
									<?php endif; ?>
								</a>
							</div>
							<div class="card-footer p-0">
							<a class="btn btn-success btn-block" href="<?=base_url?>categoria/ver&id=<?=$product->categoria_id?>">Ver</a>	
							</div>
						</div>
					</div>

				
					
						
					

				
					
					
					
				</div>
		<?php endwhile; ?>

	<?php endif; ?>
<?php else: ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>