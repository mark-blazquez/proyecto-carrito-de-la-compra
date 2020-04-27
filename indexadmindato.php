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
	<div class="alert alert-dismissible alert-warning fade show" role="alert">
		 accion realizada
		<button type="button"class="close" data-dismiss="alert" arial-label="close">
			<span aria-hidden="true">x</span>
		</button>
	</div>
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