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
		<h3 class="text-danger" >sentimos comunicarte que tu usuario o contraseña son incorrectos ,intentalo de nuevo</h3></h3>
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
