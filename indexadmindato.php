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
	<div class="alert alert-dismissible alert-warning fade show" role="alert">
		<p> realizada</p><!--indice con mensaje de accion realizada-->
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