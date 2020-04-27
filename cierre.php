<?php
	session_start();
	session_destroy();
	header("location:index.php");/*nos lleva de vuelta al index*/
?>
