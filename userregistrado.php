<?php
		$correo=$_POST["correo"];
		$nombre=$_POST["nombre"];
		$contraseña=$_POST["contraseña"];
		$apellido=$_POST["apellido"];
		$codigo=$_POST["codigo"];
		$direccion=$_POST["direccion"];
		$movil=$_POST["movil"];
		$registro=$_POST["registro"];
		/*conexion*/

		/*sql local*/
		$dsn = 'mysql:dbname=tienda;host=localhost';
		$usuario = 'root';
		$contrasena = "";
					
		/*base de datos del servidor */
		/*$dsn = 'mysql:dbname=id12543716_datos_personales;host=localhost';
		$usuario = 'id12543716_root';
		$contrasena = "olabase";*/


		if (isset($registro)){ 
			try{
				$con = new PDO($dsn, $usuario, $contrasena);
				/*insertar en la tabla */
				$sentencia = $con->prepare("INSERT INTO usuarios (correo,contraseña,nombre,apellido,codigo,direccion,movil)VALUES(?,?,?,?,?,?,?)");
				$sentencia->bindParam(1, $correo);
				$sentencia->bindParam(2, $contraseña);
				$sentencia->bindParam(3, $nombre);
				$sentencia->bindParam(4, $apellido);
				$sentencia->bindParam(5, $codigo);
				$sentencia->bindParam(6, $direccion);
				$sentencia->bindParam(7, $movil);
				$sentencia->execute();
				header("Location:indexregis.php");
			}
			catch(PDOException $e){
				echo 'Fallo la conexion:'.$e->GetMessage();
			}
		}else{
			echo "no funciona";
		}
?>