<?php
    /*conexion*/
	require_once('conexion.php');
	$con=Db::conectar();

	
	$id=$_POST["id"];
/*selecciono el producto por id pasado en el imput y lo elimino */
	$sentencia = $con->prepare("DELETE FROM productos WHERE id=:id");
	$rows = $sentencia->execute( array( ':id' => $id));
	if( $rows > 0 )
	{
		header("location:indexadmindato.php");

	}
?>
<!--esto es para eliminar un producto de la base de datso -->