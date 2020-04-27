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
		include"./templates/headerregistrado.php";
	?>
	<?php if($mensaje!=""){ ?>
		<div class="alert alert-success" >
			<?php echo $mensaje;  ?>	
		</div>
	<?php } ?>
	<!-- cuerpo -->
	<?php
		include"./templates/cuerpoindex.php";
	?>
	<!-- pie de pagina -->
	<?php
		include"./templates/footer.php";
	?>	
</body>
</html>