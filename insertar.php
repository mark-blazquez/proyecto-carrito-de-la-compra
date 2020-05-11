<?php
    /*conexion*/
	require_once('conexion.php');
    $con=Db::conectar();

    
		/**recojo los datos del imput  */
		$nombre=$_POST["nombre"];
		$precio=$_POST["precio"];
		$descripcion=$_POST["descripcion"];
		$img=$_POST["img"];
		/**intoduzco los datos del imput en la base de datos */
		$sentencia = $con->prepare("INSERT INTO productos(nombre,precio,descripcion,img)VALUES(?,?,?,?)");
		$sentencia->bindParam(1, $nombre);
		$sentencia->bindParam(2, $precio);
		$sentencia->bindParam(3, $descripcion);
		$sentencia->bindParam(4, $img);
		$sentencia->execute();
		header("location:indexadmindato.php");
		
?><!--insertando un producto nuevo en la tabla-->
        

