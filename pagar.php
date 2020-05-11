<?php
session_start();
include "carrito.php";
require_once('conexion.php');
$con=Db::conectar();
        /**en caso de existir la sesion que realize el pago */
        if(isset($_SESSION["usuario"])){
           /**clave uunica de trnasaccion */
            $clavetransaccion=session_id();
            
           

            $correo=$_SESSION["usuario"];

           
            /**recorro los datos de la sesion para poder plasmarlos  */
            foreach ($_SESSION["carrito"] as $indice => $producto){
                $total=$total + ($producto['precio']*$producto['cantidad']);
            }
            
            
            
            

            /*se introducen los datos en la tabala*/
            /**tabla ventas  */
            $sentencia = $con->prepare("INSERT INTO ventas(id,clavetransaccion,fecha,correo,total)VALUES(NULL,:clavetransaccion,NOW(),:correo, :total)");
            $sentencia->bindParam(":clavetransaccion",$clavetransaccion);
            $sentencia->bindParam(":correo",$correo);
            $sentencia->bindParam(":total",$total);
            $sentencia->execute();
            
            /**tabla faccturas */
            $idventa=$con->lastInsertId();
            
            foreach ($_SESSION["carrito"] as $indice => $producto){
                $sentencia = $con->prepare("INSERT INTO factura(id,idventa,idproducto,preciounidad,cantidad,nombre)VALUES(NULL,:idventa,:idproducto,:preciounidad,:cantidad,:nombre)");
                $sentencia->bindParam(":idventa",$idventa);
                $sentencia->bindParam(":idproducto",$producto["id"]);
                $sentencia->bindParam(":preciounidad",$producto["precio"]);
                $sentencia->bindParam(":cantidad",$producto["cantidad"]);
                $sentencia->bindParam(":nombre",$producto["nombre"]);
                $sentencia->execute();
            }
            /*borro lacesta para que no aparezcan productos en el carrito*/
            unset($_SESSION["carrito"]);
            /**reenvio a la pag de facturas */
            header("location:facturas.php");
             

        }else{/**si no hay sesion te envia a la pagina del carrito de un usuario sin sesion iniciada */
            header("location:mostrarcarritonoregis.php");
        }
        
    ?>
