<?php
    /*conexion*/
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
		include"./templates/headeradministrador.php";
    ?>
    <!-- cuerpo -->
	<?php
		include"./templates/cuerpoindexadmin.php";
	?>
	
	
</body>
</html>