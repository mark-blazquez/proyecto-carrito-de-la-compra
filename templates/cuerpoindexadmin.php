<div class="container bg-warning">
        <h5 class="d-flex justify-content-center">hola administrador este es el lugar para modificar , consultar , introducir y borrar los objetos</h5>
        <div class="d-flex justify-content-center p-2 ">
        <!--estos son los botones para realizar acciones-->

            <div class="p-2">
                <button class="btn btn-dark  d-sm-block collapse   " type="radio" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" >
                    <a href="#contacto"class="text-light">mostar tabla</a>
                </button>
            </div>
            <div class="p-2">
                <button class="btn btn-dark  d-sm-block collapse     " type="radio" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" >
                    <a href="#contacto"class="text-light">insertar</a>
                </button>
            </div>
            <div class="p-2">
                <button class="btn btn-dark  d-sm-block collapse    " type="radio" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" >
                    <a href="#contacto"class="text-light">eliminar</a>
                </button>
            </div>
            <div class="p-2">
                <button class="btn btn-dark  d-sm-block collapse   " type="radio" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" >
                    <a href="#contacto"class="text-light">modificar</a>
                </button>
            </div>
        </div>
        <!--estan son las acciones de los botones que estan ocultas-->
        
        <form class="collapse p-2" action="insertar.php" method="POST" id="multiCollapseExample2">
                <input type="text" name="nombre" placeholder="nombre del articulo">
                <input type="text" name="precio" placeholder="precio del articulo">
                <input type="text" name="descripcion" placeholder="descripcion del articulo">
                <input type="text" name="img" placeholder="url de la imagen del articulo">
                <input class="btn btn-dark" role="button" type="submit" name="añadir" value="añadir articulo">
        </form>
        
        <form class="collapse p-2" action="borrar.php" method="POST" id="multiCollapseExample3">
                
                <input type="text" name="id" placeholder="id del producto">
                <input class="btn btn-dark" role="button" type="submit" name="submit" value="borrar producto">
        </form>


        
        <form class="collapse p-2" action="actualizar.php" method="POST" id="multiCollapseExample4">
                <p>para actualizar el producto consulta el id primero y a continuacion inserta los valores nuevos </p>
                <input type="text" name="id" placeholder="id del articulo">
                <input type="text" name="nombre" placeholder="nombre del articulo">
                <input type="text" name="precio" placeholder="precio del articulo">
                <input type="text" name="descripcion" placeholder="descripcion del articulo">
                <input type="text" name="img" placeholder="url de la imagen del articulo">
                <input class="btn btn-dark" role="button" type="submit" name="submit" value="actualizar articulo">
        </form>	
        <!--esta es la tabla de productos con su informacion-->
        <table class="table table-warning collapse " id="multiCollapseExample1">
            <tbody>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>precio</th>
                    <th>descripcion</th>
                    <th>img</th>
                </tr>
                <?php
                    $sentencia = $con->query('SELECT * FROM productos');
                    foreach($sentencia as $row){
                ?>
                <tr>
                    
                    <td><?php echo $row[0]?></td>
                    <td><?php echo $row[1]?></td>
                    <td><?php echo $row[2]?></td>
                    <td><?php echo $row[3]?></td>
                    <td><?php echo $row[4]?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        
    </div>