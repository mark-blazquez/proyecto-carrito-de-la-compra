<div class="container d-flex justify-content-center">
		<div class="row">
			<?php 
				$sentencia=$con->prepare("SELECT * FROM `productos`");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				
			?>
			<?php foreach($listaProductos as $producto){ ?>
				<div class="col-3">
					<div class="card">
						<img class="card-img-top" src="<?php echo  $producto["img"] ;?>" alt="" height="200px">
						<div class="card-body">
							<h5 class="card-title"><?php echo  $producto["precio"] ;?></h5>
							<h6><?php echo  $producto["nombre"] ;?></h6>
							<p class="card-text"></p>
							<form action="" method="post">
								<input type="hidden" name="id" id="id"  value="<?php echo openssl_encrypt( $producto["id"],COD,KEY) ;?>">
								<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $producto["nombre"],COD,KEY) ;?>">
								<input type="hidden" name="precio" id="precio"  value="<?php echo openssl_encrypt( $producto["precio"],COD,KEY) ;?>">
								<input type="number" name="cantidad" id="cantidad" value="1"  >
								<button class="btn btn-primary" type="submit" name="accion" value="agregar al carrito">agregar al carrito</button>
							</form>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>