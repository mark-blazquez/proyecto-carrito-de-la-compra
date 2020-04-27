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
<body>
	<!-- cabecera -->
	<?php
		include"./templates/headeradministrador.php";
    ?>
    <!-- cuerpo -->
	<?php
		include"./templates/cuerpoindexadmin.php";
	?>
	
	<!-- pie de pagina -->
	<?php
		include"./templates/footer.php";
	?>	
</body>
</html>