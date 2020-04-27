<?php
    /*conexion*/
	require_once('conexion.php');
	$con=Db::conectar();

	
	$id=$_POST["id"];

	$sentencia = $con->prepare("DELETE FROM productos WHERE id=:id");
	$rows = $sentencia->execute( array( ':id' => $id));
	if( $rows > 0 )
	{
		header("location:indexadmindato.php");

	}
?>