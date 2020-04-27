<?php
    define("KEY","ola");
    define("COD","AES-128-ECB");
    session_start();
    

    if(isset($_POST["accion"])){
        switch($_POST["accion"]){
            case'agregar al carrito':

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
                if (is_string(openssl_decrypt($_POST["cantidad"],COD,KEY))){
                    $cantidad=openssl_decrypt($_POST["cantidad"],COD,KEY);
                    $mensaje= "cantidad correcta ".$cantidad;
                    
                }
                else{
                    $mensaje ="cantidad incorrecta ".$cantidad;
                }
                if (is_string(openssl_decrypt($_POST["precio"],COD,KEY))){
                    $precio=openssl_decrypt($_POST["precio"],COD,KEY);
                    $mensaje= "precio correcto ".$precio;
                    
                }
                else{
                    $mensaje ="precio incorrecto ".$precio;
                }
                if (!isset($_SESSION["carrito"])){
                    $producto=array(
                        'id'=>$id,
                        'nombre'=>$nombre,
                        'cantidad'=>$cantidad,
                        'precio'=>$precio);
                    $_SESSION["carrito"][0]=$producto;
                }
                else{
                    $numeroProducto=count($_SESSION["carrito"]);
                    $producto=array(
                        'id'=>$id,
                        'nombre'=>$nombre,
                        'cantidad'=>$cantidad,
                        'precio'=>$precio

                    );
                    $_SESSION["carrito"][$numeroProducto]=$producto;
                }
                $mensaje ="producto agregado al carrito";
            break;
            case 'borrar del carrito':
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