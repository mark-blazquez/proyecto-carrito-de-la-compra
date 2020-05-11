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
<body style="background-image: url(https://i.pinimg.com/originals/70/59/89/705989c1c8471442290802deae51fd0e.jpg); ">
    <!-- cabecera -->
    <?php
        include"./templates/headerregistrado.php";
    ?>
	<!--cuerpo -->
		<?php
		/*esta comparacion la hago para que un usuario sin pedidos no vea la tabla sino un menaje de que no hay pedidos  */
		$sentencia=$con->prepare("SELECT correo from ventas where correo='$correo'");
		$sentencia->execute();
		foreach($sentencia as $row){
			$row[0];
						
		}
		$correo1 = $row[0];

		if ($correo!=$correo1) {
			?>	<div class="container bg-warning">
					<div class="d-flex justify-content-center" >
						<img class="mw-100" src="https://4.bp.blogspot.com/-KgUYG-5Ftn8/VCokNcMx92I/AAAAAAAAAWg/rqZuyyLZEgA/s1600/tenia%2Buna%2Bpistola%2Ben%2Bla%2Bmano.jpg" >

					</div>
					<h4>no hay facturas que mostar , compra un arma sin verguenza , es la unica forma de defender a tus seres queridos</h4>
				</div>
			<?php
		}else{
					
		?>

		<div class="container bg-warning">
			<div class="d-flex justify-content-center">
				<form action="datosticket.php" method="POST" >
					<h5 class="text-justify-ceneter">imprimir factura</h5>
					<input  type="number" class="form-control"   required="true" name="id" placeholder="numero id de pedido"></input>
					<input type="submit" button class="btn btn-danger"  value="icono ticket"></input>	
				</form>			
			</div>
			<div class="table d-flex justify-content-center">
				<table class=" table table-borderless"><!-- tabla que muestra los pedidos por id fecha y total de compra -->
					<thead>
						<tr>
							<th> id de pedido </th>
							<th> fecha</th>
							<th> total compra</th>
							
						</tr>
					</thead>
					
					<tbody>
						<!-- obtengo los datos de pedido para imprimirlos -->
						<?php
							$sentencia=$con->query("SELECT id,fecha, total from ventas where correo='$correo' order by fecha desc");
							foreach($sentencia as $row){
						?>
						<tr>
							
								<td>
									<?php $id=$row[0] ;?>
									<?php echo $id ;?><!-- hago esto xk va a ser el id que meta en el imput para luego recojer los datos -->
								</td>
								<td><?php echo $row[1] ;?></td><!-- fecha -->
								<td><?php echo $row[2] ;?></td><!-- total -->
								
								<?php } ?>
							</form>
							
						</tr>
					</tbody>
				</table>
				<?php } ?>
			</div>
		</div>
	<!-- pie de pagina -->
	<div class="fixed-bottom">
		<?php
			include"./templates/footer.php";
		?>
	</div>	
</body>
</html>