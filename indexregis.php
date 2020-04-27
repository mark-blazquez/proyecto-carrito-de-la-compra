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
<body>
	<!-- cabecera -->
	<?php
        include"./templates/header.php";
    ?>
    <!--cuerpo -->
	<div class="container d-flex justify-content-center">
		<h3 >tu usario ha sido creado de forma correcta , inicia sesion y comprueba tus datos</h3>
	</div>
	<?php
		include"./templates/cuerpoindex.php";
	?>
	
	<!-- pie de pagina -->
	<?php
		include"./templates/footer.php";
	?>
</body>
</html>