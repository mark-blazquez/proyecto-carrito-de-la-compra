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
<body style="background-image: url(https://i.pinimg.com/originals/70/59/89/705989c1c8471442290802deae51fd0e.jpg); ">
    <!-- cabecera -->
    <?php
        include"./templates/header.php";
    ?>
    <!--cuerpo -->
    <div class="alert alert-danger" role="alert">inicia sesion antes de pagar</div>
    <?php
       include"./templates/mostrarcarrito.php";
      
	  ?>
    <!-- pie de pagina -->
    <div class="fixed-bottom">
        <?php
            include"./templates/footer.php";
        ?>
    </div>
</body>
</html>
