<?php
	session_start();
	require_once('conexion.php');
	$con=Db::conectar();
	$sql="SELECT nombre FROM usuarios where correo=:correo and perfil!=1";
	/**esto es para detectar que clase de uusuario es en mi caso los administradores tienen codigo 1 
	es autoincremental en los demas, pero cambiable por si hay que nombrar a un usuario ya creadop admin ,
	le pongo diferente de uno para que esta pagina no le salte al admin*/
	$correo=($_SESSION["usuario"]);
	
	$resultado=$con->prepare($sql);
	$resultado->bindValue(":correo", $correo);
	$resultado->execute();
	foreach($resultado as $nombre)
	{
		$nombre[0];

		$sql="SELECT correo,contraseña,nombre,apellido,codigo,direccion,movil FROM usuarios where correo=:correo";
		$resultado=$con->prepare($sql);
		$resultado->bindValue(":correo", $correo);
		$resultado->execute();
		foreach($resultado as $row)
		{
			$row[0];
			$row[1];
			$row[2];
			$row[3];
			$row[4];
			$row[5];
			$row[6];
		}/*se obtienen los datos y se guardan para luego mostrarlos*/
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include"./templates/head.php";
	?>
</head>
<body style="background-image: url(https://i.pinimg.com/originals/70/59/89/705989c1c8471442290802deae51fd0e.jpg); "> 

	<!-- cabecera -->
	<?php
		include"./templates/headerregistrado.php";
	?>
	<!--cuerpo -->
	<div class="container bg-warning">
		<h3>Bienvenido <i><strong><?php echo"$nombre[0]";?></i></strong> a continuacion te presentamos tus datos:</br></h3>
		<div class="container d-flex justify-content-center">
				<div class=" container d-flex justify-content-center">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th scope="col">correo</th>
								<th scope="col">contraseña</th>
								<th scope="col">nombre</th>
								<th scope="col">apellido</th>
								<th scope="col">codigo postal</th>
								<th scope="col">direccion</th>
								<th scope="col">movil</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo "$row[0]";?></td>
								<td><?php echo "$row[1]" ;?></td>
								<td><?php echo "$row[2]" ;?></td>
								<td><?php echo "$row[3]" ;?></td>
								<td><?php echo "$row[4]" ;?></td>
								<td><?php echo "$row[5]" ;?></td>
								<td><?php echo "$row[6]" ;?></td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
	</div>
    <!-- pie de pagina -->
	<div class="fixed-bottom">
		<?php
			include"./templates/footer.php";
		?>
	</div>
</body>
</html>