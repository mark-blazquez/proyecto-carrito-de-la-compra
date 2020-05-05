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
    <div class="alert alert-danger" role="alert">iniccia sesion antes de pagar</div>
    <?php
       include"./templates/mostrarcarrito.php";
      
	  ?>
    <!-- pie de pagina -->
    <?php
		  include"./templates/footer.php";
	  ?>
</body>
</html>
