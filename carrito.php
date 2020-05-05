<?php
    define("KEY","ola");
    define("COD","AES-128-ECB");
    session_start();
    $cantidad=$_POST["cantidad"];

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
                if (is_string(openssl_decrypt($_POST["precio"],COD,KEY))){
                    $precio=openssl_decrypt($_POST["precio"],COD,KEY);
                    $mensaje= "precio correcto ".$precio;
                    
                }
                else{
                    $mensaje ="precio incorrecto ".$precio;
                }

                $producto=array(
                    'id'=>$id,
                    'nombre'=>$nombre,
                    'precio'=>$precio,
                    'cantidad'=>$cantidad
                    
                );
                
                

                if (isset($cantidad)) {
                    if ($cantidad > 0) {
                        setcookie("carrito",serialize($producto),time()+(3600));

                        $mensaje ="producto agregado al carrito";
                    }else {
                        $mensaje="la cantidad de producto es erronea";
                    }
                }else {
                    $mensaje="la cantidad de producto es erronea";
                }

                if (isset($_COOKIE["carrito"])){
                    setcookie("carrito",serialize($producto),time()+(3600));
                };
                
                


            break;
            case 'borrar del carrito':
                if (is_numeric(openssl_decrypt($_POST["id"],COD,KEY))){
                        $id=openssl_decrypt($_POST["id"],COD,KEY);
                    

                        $producto=unserialize($_COOKIE['carrito']);
                        if($producto['id']==$id){
                            setcookie("carrito",serialize($producto),time()-1);
                            setcookie("cantidad",$cantidad,time()-1);
                            if (isset($_SESSION["usuario"])) {
                                header("location:mostrarcarritoregis.php");
                            }else{
                                header("location:mostrarcarritonoregis.php");
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