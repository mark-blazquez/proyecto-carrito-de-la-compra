<?php
	include "carrito.php";
	require_once('conexion.php');
	$con=Db::conectar(); 
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
        include"./templates/header.php";
    ?>
	<!--cuerpo -->
	<div class="alert alert-dismissible alert-success fade show" role="alert">
		<h3 >tu usario ha sido creado de forma correcta , inicia sesion y comprueba tus datos</h3>
		<button type="button"class="close" data-dismiss="alert" arial-label="close">
			<span aria-hidden="true">x</span>
		</button><!--mensaje de producto añadido-->
	</div>
	<!--cuando un usuario se ha registrado correctamente-->
	<?php
		include"./templates/cuerpoindex.php";
	?>
	
	<!-- pie de pagina -->
	<?php
		include"./templates/footer.php";
	?>
</body>
</html>