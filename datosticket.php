<?php
	
	session_start();
	require_once('conexion.php');
	$con=Db::conectar(); 

    $correo=$_SESSION["usuario"];
    $idventa=$_POST["id"];
    
    
	
   
    

    $sentencia=$con->prepare("SELECT total from ventas where id='$idventa'");
    $sentencia->execute();
	foreach($sentencia as $row){
		$total=$row[0];
        
    }

    /*poner un header a ticketpdf.php para quer muestre directamente los datos en el pdf */
    
    
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include"./templates/head.php";
	?>
</head>
<body>
    <div class="container d-flex align-item-center justify-content-center">
        <form action="ticketpdf.php" method="POST" >
            <?php 
                $sentencia=$con->prepare("SELECT idproducto,preciounidad,cantidad from factura where idventa='$idventa'");
                $sentencia->execute();
                foreach($sentencia as $row){
                   
            ?>                       
            <input  type="text" class="form-control"   required="true" name="id" value="<?php echo $row[0] ;?>">

            <input  type="text" class="form-control"   required="true" name="precio" value="<?php echo $row[1] ;?>">
            <input  type="text" class="form-control"   required="true" name="cantidad" value="<?php echo  $row[2] ;?>">
            <?php } 
	
                $idproducto=$row[0];

                $sentencia=$con->prepare("SELECT nombre from productos where id='$idproducto'");
                $sentencia->execute();
                foreach($sentencia as $row){
                    
            ?>
            <input  type="text" class="form-control"   required="true" name="nombre" value="<?php echo  $row[0] ;?>">
            <?php } ?>

            <input  type="text" class="form-control"   required="true" name="total" value="<?php echo  $total ;?>">	

            <div class="alert alert-primary" role="alert">
                <h5>vas a ser redireccionado a una pagina en la que podras visualizar el pdf</h5>
                <input type="submit" button class="btn btn-danger"  value="aceptar"></input>
            </div>
            
                                    
        </form>
    </div>
</body>
</html>
