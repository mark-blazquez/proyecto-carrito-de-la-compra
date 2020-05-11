<?php if($mensaje!=""){ ?>
		<div class="alert alert-dismissible alert-warning fade show" role="alert">
			<?php echo $mensaje;  ?>
			<button type="button"class="close" data-dismiss="alert" arial-label="close">
				<span aria-hidden="true">x</span>
			</button><!--mensaje de producto añadido-->
		</div>
<?php } ?>
<div class="container bg-warning ">
	<div  >
		<h4>
			Bienvenido a la armeria de mark un pequeño rincon de internet donde se proporciona armas a los verdaderos patriotas hijos del tio sam .
			Eres americano y no tienes un arma .....compra x internet xk no tienes derecho ni de dirigirme la palabra . Como sino vas a defender a
			tu familia de un atraco , o de un insulto, o una mirada desafiante ,nada mejor que un arma para dejar claro quien manda  
		</h4> 	
	</div>
	<h4 class="d-flex justify-content-center">tienda</h4>
	<div class="row">
			<?php /*selecciono los datos de los productos*/
				$sentencia=$con->prepare("SELECT * FROM `productos`");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				
			?>
			<?php foreach($listaProductos as $producto){ ?>
				<div class="col-12 p-5">
					<div class="d-flex"><!--creo card con la informacion de la base de datos -->
						<img  src="<?php echo  $producto["img"] ;?>" width="500" height="300px">
						<div class="card-body">
							<h5 class="card-title"><?php echo  $producto["precio"] ;?></h5>
							<h5><?php echo  $producto["nombre"] ;?></h5>
							<h6><?php echo  $producto["descripcion"] ;?></h6>
							<p class="card-text"></p>
							<form action="" method="post"><!-- creo los imput k van al carrito pero aplicandole encriptacion-->
								<input type="hidden" name="id" id="id"  value="<?php echo openssl_encrypt( $producto["id"],COD,KEY) ;?>">
								<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $producto["nombre"],COD,KEY) ;?>">
								<input type="hidden" name="precio" id="precio"  value="<?php echo openssl_encrypt( $producto["precio"],COD,KEY) ;?>">
								<input type="number" name="cantidad" id="cantidad" value="1"  >
								<button class="btn btn-dark" type="submit" name="accion" value="agregar al carrito">agregar al carrito</button>
							</form>
						</div>
					</div>
				</div>

			<?php } ?>

	</div>
</div>