<?php
	
	session_start();
	require_once('conexion.php');
	$con=Db::conectar(); 

    $correo=$_SESSION["usuario"];
    $idventa=$_POST["id"];
    $_SESSION["id"]=$idventa;
    

    /**obtengo el correo asociado al  idventa para que solo pueda imprimir sus facturas */
    $sentencia=$con->prepare("SELECT correo from ventas where id='$idventa'");
    $sentencia->execute();
    foreach($sentencia as $row){
        $correo1 = $row[0];
        
    }
    /*esto es para que solo atrape los datos de vinvulados a tu correo y no a otro , en caso de ser otro te manda a la zona de facturas */

    if (isset($correo)) {
        if ($correo!=$correo1) {
            /**meter un srcipt para que salga k los datos del ticket */
            header("location:facturas.php");
        }
    }


?>               
<!DOCTYPE html>
<html>
<head>
	<?php
		include"./templates/head.php";
	?>
</head>
<body style="background-image: url(https://i.pinimg.com/originals/70/59/89/705989c1c8471442290802deae51fd0e.jpg); ">
    <div class="container d-flex align-item-center justify-content-center">
        <div class="alert alert-warning" role="alert">
            <h5 >vas a ser redireccionado a una pagina en la que podras visualizar el pdf</h5>
            <button class="btn btn-dark"><a class="text-light" href="ticketpdf.php">aceptar</a> </button>
        </div><!--esto es el boton de redireccionamiento para hacer el ticket que pasa todas las variabales --> 
    </div>
</body>
</html> 