<?php
	session_start();
	session_destroy();/**cierro la sesion */
	setcookie("carrito",time()-1);/**destruto la cookie para que al siguente cliente no se le quede nuestros datos */
	header("location:index.php");/*nos lleva de vuelta al index*/
?>
