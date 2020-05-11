<?php
if (isset($_SESSION["carrito"])) {
	foreach ($_SESSION["carrito"] as $indice => $producto)
	$cantidad=$producto["cantidad"];
}
?>
<header  class="bg-dark" >
	<h1 class="text-center text-light"><a href="index.php" class="text-light"> Armeria Mark</a></h1>
	<nav class=" navbar d-flex p-2">

			<!--boton carrito-->
			<button type="button " class="btn btn-primary text-light ">
				<a href="mostrarcarritonoregis.php" class="text-light">ir al carrito(
					<?php

					echo (empty($_SESSION["carrito"]))?0:count($_SESSION["carrito"]);
					?>
					)
				</a>	
			</button>
			<!--formulario inicar sesion-->
			<div class=" d-flex align-items-center ">
				<form action="validacion.php" method="POST" >
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
						iniciar sesion 
					</button>

					<div class="modal fade" id="exampleModal" >
						<div class="modal-dialog" >
							<div class="modal-content">
								<div class="modal-header bg-primary">
								<h5 class="modal-title text-light" id="exampleModalLabel">iniciar sesion</h5>
								<button type="button" class="close text-light" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<form action="validacion.php" method="POST" >
									<div class="form-group">
										<label for="exampleInputEmail1">correo </label>
										<input type="email" class="form-control"  placeholder="introduce tu correo" required="true" name="correo">
									</div>
									
									<div class="form-group">
										<label for="exampleInputPassword1">contraseña</label>
										<input type="password" class="form-control" name="contraseña" placeholder="introduce tu contraseña" required="true">
									</div>
									<div class="modal-footer">
										<input type="submit" class="btn btn-primary" name="inicio">
									</div>
								</form>
							</div>
						</div>
					</div>
				</form>
			</div>

			<!--formulario para registrarse-->
			<div class="p-2  ">
				<form action="userregistrado.php" method="POST">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
						registrarte
					</button>

					<div class="modal fade" id="exampleModal1" role="dialog" >
						<div class="modal-dialog" >

							<div class="modal-content">
								<div class="modal-header bg-primary text-light">
									<h5 class="modal-title bg-primary" id="exampleModalLabel1">registro de usuario</h5>
									<button type="button" class="close text-light" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									
										<div class="form-group">
											<label for="exampleInputEmail1">correo </label>
											<input type="email" class="form-control"  placeholder="introduce tu correo" required="true" name="correo">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword3">contraseña</label>
											<input type="password" class="form-control" placeholder="introduce tu contraseña" required="true" name="contraseña">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">nombre</label>
											<input type="text" class="form-control" placeholder="introduce tu nombre" required="true" name="nombre" >			    	
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">apellido</label>
											<input type="text" class="form-control" placeholder="introduce tu apellido" required="true" name="apellido" >			    	
										</div>
											<div class="form-group">
											<label for="exampleInputEmail1">codigo postal</label>
											<input type="text" class="form-control" placeholder="introduce tu codigo postal" required="true" name="codigo" >			    	
										</div>
											<div class="form-group">
											<label for="exampleInputEmail1">direccion</label>
											<input type="text" class="form-control" placeholder="introduce tu direccion" required="true" name="direccion" >			    	
										</div>
											<div class="form-group">
											<label for="exampleInputEmail1">numero movil</label>
											<input type="number" class="form-control" placeholder="introduce tu numero de movil" required="true" name="movil" >			    	
										</div>	      	
									
								</div>
								<div class="modal-footer">
									<input type="submit" class="btn btn-primary" value="registrar" name="registro">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		
	</nav>
</header>