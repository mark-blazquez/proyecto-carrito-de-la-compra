<?php
    /*conexion*/
	require_once('conexion.php');
	$con=Db::conectar();

	$id=$_POST["id"];
	$nombre=$_POST["nombre"];
	$precio=$_POST["precio"];
	$descripcion=$_POST["descripcion"];
	$img=$_POST["img"];
 /*selecionol el id e intoduzco de nuevo los datos */
	$senetencia = $con->prepare('UPDATE productos SET nombre = :nombre, precio = :precio, descripcion = :descripcion, img = :img WHERE id = :id');
	$rows = $senetencia->execute( array( ':id' => $id, ':nombre' => $nombre, ':precio' => $precio, ':descripcion' => $descripcion, ':img' => $img));
	if( $rows > 0 ){
		header("location:indexadmindato.php");
	}
?>
<!--esto es para modificar el producto de la base de datso -->