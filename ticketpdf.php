<?php
    $id=$_POST["id"];
    $precio=$_POST["precio"];
    $cantidad=$_POST["cantidad"];
    $nombre=$_POST["nombre"];
    $total=$_POST["total"];
    /*$pdf->Cell(40,10,utf8_decode(  $id.$precio.$cantidad.$nombre.$total));*/
    



    
    require('./libreriapdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,utf8_decode( 'galerias mark ' ));
    /// Apartir de aqui empezamos con la tabla de productos
    $pdf->setY(60);$pdf->setX(135);
    $pdf->Ln();
    /////////////////////////////
    //// Array de Cabecera
    $header = array("Cod.", "Descripcion","Cant.","Precio","Total");
    //// Arrar de Productos
    $products = array(
    array("$id", "$nombre",$cantidad,$precio,$total),
    );
    // Column widths
    $w = array(20, 95, 20, 25, 25);
    // Header
    for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C');
    $pdf->Ln();
    // Data
    $total = 0;
    foreach($products as $row)
    {
        $pdf->Cell($w[0],6,$row[0],1);
        $pdf->Cell($w[1],6,$row[1],1);
        $pdf->Cell($w[2],6,number_format($row[2]),'1',0,'R');
        $pdf->Cell($w[3],6," ".number_format($row[3],2,".",","),'1',0,'R');
        $pdf->Cell($w[4],6," ".number_format($row[3]*$row[2],2,".",","),'1',0,'R');

        $pdf->Ln();
        $total+=$row[3]*$row[2];

    }
    $pdf->Output();
?>