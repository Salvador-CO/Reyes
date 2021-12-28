<?php
require_once '../../conexion.php';
require_once 'fpdf/fpdf.php';
$pdf = new FPDF('P', 'mm', 'letter');
$pdf->AddPage();
$pdf->SetMargins(10, 10, 10);
$pdf->SetTitle("Ventas");
$pdf->SetFont('Arial', 'B', 12);
$codigo = $_GET['codigo'];

$config = mysqli_query($conexion, "SELECT * FROM configuracion");
$datos = mysqli_fetch_assoc($config);



$pedido = mysqli_query($conexion, "SELECT * FROM `pedidos` WHERE `clave`='$codigo'");
$datopedido = mysqli_fetch_assoc($pedido);


$datop=mysqli_query($conexion, "SELECT * FROM `deta_pedido` WHERE `cod_pedido`='$codigo'");
$datopG=mysqli_query($conexion, "SELECT * FROM `pedidos` WHERE `clave`='$codigo'");




$pdf->Cell(195, 5, utf8_decode($datos['nombre']), 0, 1, 'C');
$pdf->image("../../assets/images/logo1.png", 165, 5, 28, 28, 'png');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Teléfono: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20, 5, $datos['telefono'], 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, utf8_decode("Dirección: "), 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20, 5, utf8_decode($datos['direccion']), 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, "Correo: ", 0, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20, 5, utf8_decode($datos['email']), 0, 1, 'L');
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(196, 5, "Datos del cliente", 1, 1, 'C', 1);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(90, 5, utf8_decode('Nombre'), 0, 0, 'L');
$pdf->Cell(50, 5, utf8_decode('Teléfono'), 0, 0, 'L');
$pdf->Cell(56, 5, utf8_decode('Dirección'), 0, 1, 'L');
$pdf->SetFont('Arial', '', 10);
 
$pdf->Ln(3);
$pdf->SetFont('Arial', 'B', 10);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(196, 5, "Detalle de pedido", 1, 1, 'C', 1);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(14, 5, utf8_decode('Clave'), 0, 0, 'L');
    $pdf->Cell(90, 5, utf8_decode('Productos'), 0, 0, 'L');
    $pdf->Cell(25, 5, 'Total a pagar', 0, 0, 'L');
    $pdf->Cell(32, 5, 'Pago', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 10);
    $contador = 1;
    while ($row = mysqli_fetch_assoc($datopG)) {
        $pdf->Cell(14, 5, $row['clave'], 0, 0, 'L');
        $pdf->Cell(90, 5, $row['productos'], 0, 0, 'L');
        $pdf->Cell(25, 5, $row['total'], 0, 0, 'L');
        $pdf->Cell(32, 5, $row['pago'], 0, 1, 'L');
        $contador++;
    }
$pdf->Ln(3);



 
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(196, 5, "Detalle de Producto", 1, 1, 'C', 1);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(14, 5, utf8_decode('N°'), 0, 0, 'L');
    $pdf->Cell(90, 5, utf8_decode('Descripción'), 0, 0, 'L');
    $pdf->Cell(25, 5, 'Cantidad', 0, 0, 'L');
    $pdf->Cell(32, 5, 'Precio', 0, 0, 'L');
    $pdf->Cell(35, 5, 'Sub Total.', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 10);
    $contador = 1;
    while ($row = mysqli_fetch_assoc($datop)) {
        $pdf->Cell(14, 5, $contador, 0, 0, 'L');
        $pdf->Cell(90, 5, $row['producto'], 0, 0, 'L');
        $pdf->Cell(25, 5, $row['cantidad'], 0, 0, 'L');
        $pdf->Cell(32, 5, $row['precio'], 0, 0, 'L');
        $pdf->Cell(35, 5, number_format($row['total'], 2, '.', ','), 0, 1, 'L');
        $contador++;
    }
$pdf->Ln(13);
$pdf->SetFont('Arial', 'B', 10);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(196, 5, "Detalle para la trasferencia", 1, 1, 'C', 1);
$pdf->image("../assets/images/trasfer.png", 55, 110, 100, 100, 'png');

 

 


//D
$pdf->Output("ventas.pdf", "I");

?>