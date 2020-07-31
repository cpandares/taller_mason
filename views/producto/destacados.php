<h1>Algunos de nuestros productos</h1>



		<?php while($product = $productos->fetch_object()): ?>
			<div class="product">
				
			<div class="card-group">
				<a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
					<div class="card card-product shadow">
						<div class="card-header text-center"><h5 class="card-title"><?=$product->nombre?></h5></div>
							<div class="card-body p-1">
								<?php if($product->imagen != null): ?>
									<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" class="image-product"/>
								<?php else: ?>
									<img src="<?=base_url?>assets/img/camiseta.png" />
								<?php endif; ?>
								</a>
							</div>
								
						<div class="card-footer">
							
							<p class="text-center">S/. <?=$product->precio?></p>
					
							
						
							<a href="<?=base_url?>carrito/add&id=<?=$product->id?>"  class="btn btn-success btn-block p-1 text-center text-white">Comprar</a>
						</div>
				</div>						
			</div>
		</div>
		<?php endwhile; ?>


