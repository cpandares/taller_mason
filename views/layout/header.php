<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Taller del Masón</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
	</head>
	<body>
	
	<!-- CABECERA -->
	<?php $categorias = Utils::headerCategorias(); ?>
	<nav id="menu">
		<ul>
			<li>
				<a href="<?=base_url?>">Inicio</a>
			</li>
			<li>
				<a href="<?=base_url?>categoria/productos">Productos</a>

			</li>
		<?php while($cat = $categorias->fetch_object()): ?>
			<li>
				<a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
			</li>
			<?php endwhile; ?>
		</ul>
				
	</nav>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?=base_url?>assets/img/slider1.jpg" width="100%" height="400" alt="slide-1">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url?>assets/img/slider2.jpg" width="100%" height="400" alt="slider-2">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url?>assets/img/slider3.jpg" width="100%" height="400" alt="slider-2">
			</div>
		</div>
	</div>
						
	
	<!-- MENU -->
	<div id="content"><br>