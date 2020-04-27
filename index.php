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
	<?php if($mensaje!=""){ ?>
		<div class="alert alert-dismissible alert-warning fade show" role="alert">
			<?php echo $mensaje;  ?>
		<button type="button"class="close" data-dismiss="alert" arial-label="close">
			<span aria-hidden="true">x</span>
		</button>
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