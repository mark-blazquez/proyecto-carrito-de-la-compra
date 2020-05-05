<?php
session_start();
include "carrito.php";
require_once('conexion.php');
$con=Db::conectar();

        if(isset($_SESSION["usuario"])){
            
            $clavetransaccion=session_id();
            
            $producto=unserialize($_COOKIE["carrito"]);
            $id=$producto['id'];
            $nombre=$producto['nombre'];
            $precio=$producto['precio'];
            $cantidad=$producto['cantidad'];
            $total=$precio*$cantidad;
            
            
            $correo=$_SESSION["usuario"];
            

            

            $sentencia = $con->prepare("INSERT INTO ventas(id,clavetransaccion,fecha,correo,total)VALUES(NULL,'$clavetransaccion',NOW(),'$correo', '$total')");
            $sentencia->execute();
            
            $idventa=$con->lastInsertId();
            
            $sentencia = $con->prepare("INSERT INTO factura(id,idventa,idproducto,preciounidad,cantidad)VALUES(NULL,'$idventa','$id','$precio','$cantidad')");
            $sentencia->execute();
            setcookie("carrito",time()-1);
            header("location:facturas.php");
             

        }else{
            header("location:mostrarcarritonoregis.php");
        }
        
    ?>
