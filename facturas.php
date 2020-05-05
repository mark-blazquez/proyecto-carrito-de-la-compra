<?php
	
	include "carrito.php";
	require_once('conexion.php');
	$con=Db::conectar(); 
	
	$correo=$_SESSION["usuario"];
	
	?>

<!DOCTYPE html>
<html>
<head>
	<?php
		include"./templates/head.php";
	?>
</head>
<body>
    <!-- cabecera -->
    <?php
        include"./templates/headerregistrado.php";
    ?>
    <!--cuerpo -->
    
		<div class="table d-flex justify-content-center">
			<table>
				<thead>
					<tr>
						<th> id compra </th>
						<th> fecha</th>
						<th> total compra</th>
						<th> ticket</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						$sentencia=$con->query("SELECT id,fecha, total from ventas where correo='$correo' order by fecha desc");
						foreach($sentencia as $row){
					?>
					<tr>
						<form action="datosticket.php" method="POST" >
							<td>
								<?php $id=$row[0] ;?>
								<input  type="text" class="form-control"   required="true" name="id" value="<?php echo $id ;?>">
								<?php echo $id ;?>
							</td>
							<td><?php echo $row[1] ;?></td>
							<td><?php echo $row[2] ;?></td>
							<td>
								<input type="submit" button class="btn btn-danger"  value="icono ticket"></input>
							</td>
							<?php } ?>
						</form>
						
					</tr>
				</tbody>
			</table>
		</div>
	
	<!-- pie de pagina -->
	<?php
		include"./templates/footer.php";
	?>	
</body>
</html>