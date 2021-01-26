<!DOCTYPE html>
<html lang="es-MX">
<head>
	<title>Carrito de Compras</title>
	<meta charset="utf-8">
	<meta keywords="">
	<meta description="">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/scriptcatalogo.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/estiloscatalogo.css">
	<!--link rel="stylesheet" type="text/css" href="estilos/bootstrapNaranja.min"-->

</head>
<body>
	<?php
      include("header.php");
    ?>
	<main>
		<div class="wrap">
		<h1>Catalogo de Productos</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="chanclas">Chanclas</a>
				<a href="#" class="category_item" category="monturas">Monturas</a>
				<a href="#" class="category_item" category="molcajete">Molcajete</a>
				<a href="#" class="category_item" category="mariconera">Morral</a>
				<a href="#" class="category_item" category="suadero">Suadero</a>
			</div>
			<section class="products-list">
				<div class="product-item" category="monturas">
					<img src="img/Catalogo/Montura1.jpg" alt="" >
					<a href="#">Montura Cocida con Cerda</a>
				</div>
				<div class="product-item" category="monturas">
					<img src="img/Catalogo/Montura2.jpg" alt="" >
					<a href="#">Montura Corte Cuadrado</a>
				</div>
				<div class="product-item" category="monturas">
					<img src="img/Catalogo/Montura4.jpg" alt="" >
					<a href="#">Montura Corte Calador</a>
				</div>
				<div class="product-item" category="molcajete">
					<img src="img/Catalogo/MolcajeteGrande.jpg" alt="" >
					<a href="#">Molcajete Grande</a>
				</div>
				<div class="product-item" category="molcajete">
					<img src="img/Catalogo/MolcajeteChico.jpg" alt="" >
					<a href="#">Molcajete Chico</a>
				</div>
				<div class="product-item" category="chanclas">
					<img src="img/Catalogo/Chanclas1.jpg" alt="" >
					<a href="#">Huarache para Hombre</a>
				</div>
				<div class="product-item" category="chanclas">
					<img src="img/Catalogo/Chanclas2.jpg" alt="" >
					<a href="#">Huarache para Mujer</a>
				</div>
				<div class="product-item" category="mariconera">
					<img src="img/Catalogo/Mariconeda.jpg" alt="" >
					<a href="#">Morral de Baqueta</a>
				</div>
				<div class="product-item" category="suadero">
					<img src="img/Catalogo/Suadero.jpg" alt="" >
					<a href="#">Suadero</a>
				</div>
			</section>
		</div>
	</div>
	</main>
</body>
</html>
