<?php
    define("KEY","ola");
    define("COD","AES-128-ECB");
    session_start();
    if (isset($_POST["cantidad"])) {
        $cantidad=$_POST["cantidad"];
    }
    

    if(isset($_POST["accion"])){
        switch($_POST["accion"]){
            case'agregar al carrito':
                /**se comprueba que los datos sean correctos y se encripten */
                if (is_numeric(openssl_decrypt($_POST["id"],COD,KEY))){
                    $id=openssl_decrypt($_POST["id"],COD,KEY);

                    $mensaje= "id correcto ".$id;
                }
                else{
                    $mensaje ="id incorrecto ".$id;
                }
                if (is_string(openssl_decrypt($_POST["nombre"],COD,KEY))){
                    $nombre=openssl_decrypt($_POST["nombre"],COD,KEY);
                    $mensaje= "nombre correcto ".$nombre;
                    
                }
                else{
                    $mensaje ="nombre incorrecto ".$nombre;
                }
                if (is_string(openssl_decrypt($_POST["precio"],COD,KEY))){
                    $precio=openssl_decrypt($_POST["precio"],COD,KEY);
                    $mensaje= "precio correcto ".$precio;
                    
                }
                else{
                    $mensaje ="precio incorrecto ".$precio;
                }

               


                
                if (isset($cantidad)) {/**compruebo que exista el valor del imput */
                    if ($cantidad > 0) {
                        /**compruebo que sea mayor que 0 */
                        if (!isset($_SESSION["carrito"])){ /**si no existe la sesion carrito se crea y tiene valor 0 para mostarla en el header */
                            $producto=array(
                                'id'=>$id,
                                'nombre'=>$nombre,
                                'precio'=>$precio,
                                'cantidad'=>$cantidad
                                
                            );
                            $_SESSION["carrito"][0]=$producto;
                            $mensaje="producto agregado al carrito";
                        }else{/**si se encuentra ese id en el sesion carrito no lo vuelve a insertar */
                            $idproductos=array_column($_SESSION["carrito"],"id");
                            if (in_array($id,$idproductos)){
                                $mensaje="el producto ya esta en el carrito";
                            }else{/**crea una session carrito con todo los objetos */
                                $numeroProducto=count($_SESSION["carrito"]);
                                $producto=array(
                                    'id'=>$id,
                                    'nombre'=>$nombre,
                                    'precio'=>$precio,
                                    'cantidad'=>$cantidad
                                    
                                );
                                $_SESSION["carrito"][$numeroProducto]=$producto;
                                /**creacion de la cookie */
                                setcookie("carrito",serialize($producto),time()+(3600));
                                $mensaje="producto agregado al carrito";
                            }
                                
                        }
                        


                        
                    }else {
                        $mensaje="la cantidad de producto es erronea";
                    }
                }else {
                    $mensaje="la cantidad de producto es erronea";
                }



                
            break;
            case 'borrar del carrito':/**sirve para eliminar del carrito borrando por id  eliminando la cookie  */
                if (is_numeric(openssl_decrypt($_POST["id"],COD,KEY))){
                    $id=openssl_decrypt($_POST["id"],COD,KEY);
                    

                    foreach ($_SESSION["carrito"] as $indice => $producto){
                        if($producto['id']==$id){
                            unset($_SESSION["carrito"][$indice]);
                            if (isset($_COOKIE["cookie"])) {
                                header("location:mostrarcarritoregis.php");
                            }else{
                                header("location:mostrarcarritonoregis.php");
                            }
                            
                            
                        }
                    }
                }
                else{
                    $mensaje ="id incorrecto ".$id;
                }

            break;

        }
    }
?>