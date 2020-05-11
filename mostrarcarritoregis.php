<?php
session_start();
include "carrito.php";
require_once('conexion.php');
	$con=Db::conectar();
?>
<!DOCTYPE html>
<html>
<head style="background-image: url(https://i.pinimg.com/originals/70/59/89/705989c1c8471442290802deae51fd0e.jpg); ">
	<?php
		include"./templates/head.php";
	?>
</head>
<body style="background-image: url(https://i.pinimg.com/originals/70/59/89/705989c1c8471442290802deae51fd0e.jpg); ">
    <!-- cabecera -->
    <?php
        include"./templates/headerregistrado.php";
    ?><!--cabecera de usuario no registrado-->
    <!--cuerpo -->
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