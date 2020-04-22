<?php
	
	define("KEY","ola");
	define("COD","AES-128-ECB");
	include "carrito.php";
	/*conexion*/

	/*sql local*/
	$dsn = 'mysql:dbname=tienda;host=localhost';
	$usuario = 'root';
	$contrasena = "";
					
	/*base de datos del servidor */
	/*$dsn ='mysql:dbname=id12543716_datos_personales;host=localhost';
	$usuario = 'id12543716_root';
	$contrasena = "olabase";*/

	try
	{
		$con = new PDO($dsn, $usuario, $contrasena);
	}
	catch(PDOException $e)
	{
		echo 'Fallo la conexion:'.$e->GetMessage();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include"head.php";
	?>
</head>
<body>
	<!-- cabecera -->
	<?php
		include"header.php";
	?>
	<div class="alert alert-success" >
		<?php echo $mensaje;  ?>	
	</div>
	<!-- cuerpo -->
	<div class="container d-flex justify-content-center">
		<div class="row">
			<?php 
				$sentencia=$con->prepare("SELECT * FROM `productos`");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				
			?>
			<?php foreach($listaProductos as $producto){ ?>
				<div class="col-3">
					<div class="card">
						<img class="card-img-top" src="<?php echo  $producto["img"] ;?>" alt="" height="200px">
						<div class="card-body">
							<h5 class="card-title"><?php echo  $producto["precio"] ;?></h5>
							<h6><?php echo  $producto["nombre"] ;?></h6>
							<p class="card-text"></p>
							<form action="" method="post">
								<input type="hidden" name="id" id="id"  value="<?php echo openssl_encrypt( $producto["id"],COD,KEY) ;?>">
								<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $producto["nombre"],COD,KEY) ;?>">
								<input type="hidden" name="precio" id="precio"  value="<?php echo openssl_encrypt( $producto["precio"],COD,KEY) ;?>">
								<input type="hidden" name="cantidad" id="cantidad"  value="<?php echo openssl_encrypt( 1,COD,KEY) ;?>">
								<button class="btn btn-primary" type="submit" name="agregar" value="agregar al carrito">agregar al carrito</button>
							</form>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
	<!-- pie de pagina -->
	<?php
		include"footer.php";
	?>	
</body>
</html>