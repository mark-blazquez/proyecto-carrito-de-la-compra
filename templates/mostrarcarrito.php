<?php
    
?>
<div class="container">
    
    <?php if (!empty($_COOKIE["carrito"])) {/*si la cookie tiene contenido =no esta vacia muestar lo siguiente  */ ?>
    <h3 class="text-center">lista del carrito</h3>
    <table class="table table dark table-bordered ">
        <tbody>
            <tr>
                <th>nombre</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>total</th>
                
            </tr>
            <?php $total=0; ?>
            <?php
                $producto=unserialize($_COOKIE["carrito"]);
            ?>
             
            <tr>
                <td><?php echo $producto['nombre'] ?></td>
                <td><input class="sinborde" type="numbercarrito" value="<?php echo $producto["cantidad"]  ?>"></td>
                <td><?php echo $producto['precio'] ?></td>
                <td><?php echo number_format($producto['precio']*$producto['cantidad'],2)?></td>
                <td class="border-0">
                    <form method="post" action="">
                        <input  type="hidden" name="id" id="id"  value="<?php echo openssl_encrypt( $producto["id"],COD,KEY) ;?>">
                        <button class="btn btn-danger" type="submit" name="accion" value="borrar del carrito">borrar</button>
                    </form>
                    
                </td>
            </tr>
            <?php
                
                $total=$total + ($producto['precio']*$producto["cantidad"]); 
            ?>
            <tr>
                <td colspan="3"><h3>total de la compra</h3></td>
                <td><h3><?php echo number_format ($total,2) ?></h3></td>
                
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center" >
        
        <button class="btn btn-primary " type="submit" name="accion">
            <a href="pagar.php"class="text-light" >pagar</a> 
        </button>
    </div>
    <?php
        } 
        else{/*si la cookie esta vacia muestra este mensaje */
    ?>

    <div ><h6 class="text-center">no hay pructos en el carrito,¿estas seguro de que no quieres comprar nada ?,te puedes arrepentir</h6></div>   

    <?php
        }
    ?>
</div>
    