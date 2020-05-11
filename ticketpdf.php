<?php
    session_start();
    require_once('conexion.php');
    $con=Db::conectar();
    $idventa=$_SESSION["id"];

    require('./libreriapdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $correo=$_SESSION["usuario"];


    //titulo
    
    $texto0="ARMERIA MARK";
    $pdf->SetXY(80, 10);
    $pdf->MultiCell(0,0,$texto0,0,"L");

    // 1º Datos del cliente
    $sentencia=$con->prepare("SELECT fecha from ventas where id=:idventa");
    $sentencia->bindParam(":idventa",$idventa);
    $sentencia->execute();
    foreach($sentencia as $row){
        $fecha=$row[0];
        
    }
    $sentencia=$con->prepare("SELECT nombre,apellido,direccion,codigo from usuarios where correo='$correo'");
    $sentencia->execute();
    foreach($sentencia as $row){
        $row[0];
        $row[1];
        $row[2];
        $row[3];
    }
    

    //cuadrao cliente
    $texto1="Cliente: ".$row[0]." ".$row[1]."\nDireccion: ".$row[2]."\nCodigo Postal: ".$row[3]."\nFecha: ".$fecha;
    $pdf->SetXY(65, 50);
    $pdf->MultiCell(90,10,$texto1,1,"L");






    // La cabecera de la tabla 
    $pdf->SetXY(40, 120);
    $pdf->SetFillColor(255,0,0);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(60,10,"id-nombre",1,0,"C",true);
    $pdf->Cell(30,10,"Cant.",1,0,"C",true);
    $pdf->Cell(40,10,"preciounidad",1,0,"C",true);
    $pdf->Cell(30,10,"Subt.",1,1,"C",true);
    $total=0;



    /**esto es la recogida de datos de la base de datos con el id que le pasamamos en la pagina anterior */	

    
    
    $sentencia=$con->prepare("SELECT idproducto,preciounidad,cantidad,nombre from factura where idventa=:idventa");
    $sentencia->bindParam(":idventa",$idventa);
    $sentencia->execute();
    foreach($sentencia as $row){
        $row[0];
        $row[1];
        $row[2];
        $row[3];
    // Los datos (en negro)
        $pdf->SetTextColor(0,0,0);


        $pdf->SetX(40);
        $pdf->Cell(60,10,$row[0]."-".$row[3],1,0,"L");
        $pdf->Cell(30,10,$row[2],1,0,"C");
        $pdf->Cell(40,10,number_format($row[1],2),1,0,"C");
        $pdf->Cell(30,10,number_format(($row[2]*$row[1]),2),1,1,"R");
    }
    







    /*esto es el total de la factura especifica*/
    $sentencia=$con->prepare("SELECT total from ventas where id=:idventa");
    $sentencia->bindParam(":idventa",$idventa);
    $sentencia->execute();
    foreach($sentencia as $row){
        $total=$row[0];
        
    }
    $pdf->SetX(110);
    $pdf->Cell(60,20,"Total:",0,0,"C");
    $pdf->Cell(30,20,number_format($total,2),0,1,"R");

    // El documento enviado al navegador
    $pdf->Output();
?>