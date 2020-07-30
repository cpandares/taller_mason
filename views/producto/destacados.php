<h1>Algunos de nuestros productos</h1>



		<?php while($product = $productos->fetch_object()): ?>
			<div class="product">
				
				<div class="card-group">
					<a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
					<div class="row">
					<div class="col-md-12 mb-4">
						<div class="card shadow">
								<?php if($product->imagen != null): ?>
									<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" />
								<?php else: ?>
									<img src="<?=base_url?>assets/img/camiseta.png" />
								<?php endif; ?>
						<div class="card-body">
							<h5 class="card-title"><h2><?=$product->nombre?></h2></h5>
							<p><?=$product->precio?></p>
					</a>
							<p class="card-text"><a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a></p>
						</div>
						</div>
					</div>
				</div>						
			</div>
		</div>
		<?php endwhile; ?>


