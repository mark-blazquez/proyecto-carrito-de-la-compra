<header  class="navbar bg-dark navbar-dark" >
    <h1 class="text-light mr-auto p-2 "> <a href="indexregistrado.php" class="text-light">tiendas mark</a></h1>

	<nav class="d-flex p-2 w-100 justify-content-start">
        	<button type="button" class="btn btn-primary text-light ">
				<a href="mostrarcarritoregis.php" class="text-light">ir al carrito(<?php
					echo (empty($_SESSION["carrito"]))?0:count($_SESSION["carrito"]);?>)
				</a>	
			</button>
		<button type="button" class="btn btn-primary" ><a class="text-light" href="cierre.php">cerrar sesion</a></button><!--boton cerrar sesion-->
		<button type="button" class="btn btn-primary" ><a class="text-light" href="mostrardatos.php">ir a tus datos</a></button><!--boton datos-->
		<button type="button" class="btn btn-primary" ><a class="text-light" href="facturas.php">ir a tus facturas</a></button><!--boton facturas-->
    </nav>
</header>