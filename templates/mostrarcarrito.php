<div class="container bg-warning">
    <h3 class="text-center">lista del carrito</h3>
    <?php
        if (!empty($_SESSION["carrito"])) { 
    ?>
    <table class="table table-borderless  text-center">
        <tbody>
            <tr>
                <th>nombre</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>total</th>
                
            </tr>
            <?php $total=0; ?>
            <?php
                foreach ($_SESSION["carrito"] as $indice => $producto) { ?>
             
            <tr>
                <td><?php echo $producto['nombre'] ?></td>
                <td><?php echo $producto['cantidad'] ?></td>
                <td><?php echo $producto['precio'] ?></td>
                <td><?php echo number_format($producto['precio']*$producto['cantidad'],2)?></td>
                <td class="border-0">
                    <form method="post" action="carrito.php">
                        <input type="hidden" name="id" id="id"  value="<?php echo openssl_encrypt( $producto["id"],COD,KEY) ;?>">
                        <button class="btn btn-danger" type="submit" name="accion" value="borrar del carrito">borrar</button>
                    </form>
                    
                </td>
            </tr>
            <?php $total=$total + ($producto['precio']*$producto['cantidad']); }?>
            <tr>
                <td colspan="3"><h3>total</h3></td>
                <td><h3><?php echo number_format ($total,2) ?></h3></td>
                
            </tr>
        </tbody>
    </table>





    
    <div class="d-flex justify-content-center" >
        
        <button class="btn btn-dark m-1" type="submit" name="accion">
            <a href="pagar.php"class="text-light" >pagar</a> 
        </button>
    </div>
    <?php
        } 
        else{
    ?>

    <div class="d-flex justify-content-center" >
        <img class="mw-100" src="https://4.bp.blogspot.com/-KgUYG-5Ftn8/VCokNcMx92I/AAAAAAAAAWg/rqZuyyLZEgA/s1600/tenia%2Buna%2Bpistola%2Ben%2Bla%2Bmano.jpg" >

    </div>
    <h4> No hay pructos en el carrito,¿estas seguro de que no quieres comprar nada ?,te puedes arrepentir</h4>   

    <?php
        }
    ?>
</div>
    