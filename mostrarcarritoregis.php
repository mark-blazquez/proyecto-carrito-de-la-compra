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
    <!--cuerpo -->
    <?php
    include"./templates/mostrarcarrito.php";
	?>
    <!-- pie de pagina -->
    <?php
		include"./templates/footer.php";
	?>
</body>
</html>