<?php
    /*conexion*/
	require_once('conexion.php');
    $con=Db::conectar();

    
	
		$nombre=$_POST["nombre"];
		$precio=$_POST["precio"];
		$descripcion=$_POST["descripcion"];
		$img=$_POST["img"];

		$sentencia = $con->prepare("INSERT INTO productos(nombre,precio,descripcion,img)VALUES(?,?,?,?)");
		$sentencia->bindParam(1, $nombre);
		$sentencia->bindParam(2, $precio);
		$sentencia->bindParam(3, $descripcion);
		$sentencia->bindParam(4, $img);
		$sentencia->execute();
		header("location:indexadmindato.php");
		
?>
        

