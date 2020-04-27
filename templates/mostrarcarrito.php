<h3>lista del carrito</h3>
    <?php if (!empty($_SESSION["usuario"])) { ?>
    <table class="table table dark table-bordered">
        <tbody>
            <tr>
                <th>descripcion</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>total</th>
                <th>--</th>
            </tr>
            <?php $total=0; ?>
            <?php
                foreach ($_SESSION["usuario"] as $indice => $producto) { ?>
             
            <tr>
                <td><?php echo $producto['nombre'] ?></td>
                <td><?php echo $producto['cantidad'] ?></td>
                <td><?php echo $producto['precio'] ?></td>
                <td><?php echo number_format($producto['precio']*$producto['cantidad'],2)?></td>
                <td>
                    <form method="post" action="">
                    <input type="hidden" name="id" id="id"  value="<?php echo openssl_encrypt( $producto["id"],COD,KEY) ;?>">
                        <button class="btn btn-danger" type="submit" name="borrar" value="borrar carrito">borrar</button>
                    </form>
                    
                </td>
            </tr>
            <?php $total=$total + ($producto['precio']*$producto['cantidad']); }?>
            <tr>
                <td colspan="3"><h3>total</h3></td>
                <td><h3><?php echo number_format ($total,2) ?></h3></td>
                <td><button class="btn btn-danger" type="button">borrar </button></td>
            </tr>
        </tbody>
    </table>
    <?php
        } 
        else{
    ?>

    <div class="alert primary">no hay pructos en el carrito</div>   

    <?php
        }
    ?>