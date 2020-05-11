<?php
	foreach ($_SESSION["carrito"] as $indice => $producto)
	$cantidad=$producto["cantidad"];

	
?>
<header  class=" bg-dark " >
    <h1 class="text-light text-center "> <a href="indexregistrado.php" class="text-light">Armeria Mark</a></h1><!--nombre empresa-->
	<!--barra de navegacion-->
	<nav class="d-flex  w-100 ">
		<div class="p-2">
			<button type="button" class="btn btn-primary text-light "><!--boton carrito-->
				<a href="mostrarcarritoregis.php" class="text-light">ir al carrito(
				<?php
					echo (empty($_SESSION["carrito"]))?0:count($_SESSION["carrito"]);
				?>
				)
				</a>	
			</button>
		</div>
		<div class="p-2">
			<button type="button" class="btn btn-primary" ><a class="text-light" href="mostrardatos.php">ir a tus datos</a></button><!--boton datos-->
		</div>
		<div class="p-2 flex-grow-1">
			<button type="button" class="btn btn-primary" ><a class="text-light" href="facturas.php">ir a tus pedidos</a></button><!--boton pedidos-->
		</div>
		<div class="p-2 ">
			<button type="button" class="btn btn-primary" ><a class="text-light" href="cierre.php">cerrar sesion</a></button><!--boton cerrar sesion-->
		</div>
	</nav>
</header>