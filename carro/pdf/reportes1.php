<?php
require_once '../../conexion.php';
require_once 'fpdf/fpdf.php';
class PDF extends FPDF{
// Page footer
function Footer(){
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',10);
    // Page number
    $this->Cell(0,10,'Pagina '.$this->PageNo().'-{nb}',0,0,'C');
}
}


$pdf = new PDF('P', 'mm', 'letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(10, 10, 10);
$pdf->SetTitle("Ventas");
$pdf->SetFont('Arial', 'B', 15);



$config = mysqli_query($conexion, "SELECT * FROM configuracion");
$datos = mysqli_fetch_assoc($config);

		if (!empty($_POST['Finicial']) && !empty($_POST['Ffinal'])) {
			$fechaInicio=$_POST['Finicial'];
			$fechaFin=$_POST['Ffinal'];
            $c1="WHERE `fecha` BETWEEN '".$fechaInicio."' AND '".$fechaFin."'";
            $sutitulo="Ventas entre el dia ".$fechaInicio." al dia ".$fechaFin;        
        }else if (!empty($_POST['Finicial'])) {
        	$fechaInicio=$_POST['Finicial'];
            $c1="WHERE `fecha` >= '".$fechaInicio."'";
            $sutitulo="Ventas del dia ".$fechaInicio." en adelante.";        
        }else if(!empty($_POST['Ffinal'])){
			$fechaFin=$_POST['Ffinal'];
            $c1="WHERE `fecha` <= '".$fechaFin."'";
            $sutitulo="Ventas anteriores al dia ".$fechaFin;        
        }else{
            $c1="";
            $sutitulo="Todas las ventas hechas";        
        }
$datoreporte=mysqli_query($conexion, "SELECT * FROM ventas $c1");
$SUMA=mysqli_query($conexion, "SELECT SUM(total) as suma FROM ventas $c1");

$pdf->Cell(195, 5, utf8_decode($datos['nombre']), 0, 1, 'C');
$pdf->image("../../assets/img/logo.jpg", 165, 5, 28, 28, 'jpg');
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

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(196, 6, "$sutitulo", 1, 1, 'C', 1);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(14, 5, utf8_decode('N°'), 0, 0, 'L',1);
$pdf->Cell(75, 5, utf8_decode('Descripcion'), 0, 0, 'L', 1);
$pdf->Cell(47, 5, 'Usuario', 0, 0, 'L',1);
$pdf->Cell(40, 5, 'Fecha', 0, 0, 'L',1);
$pdf->Cell(20, 5, 'Total', 0, 1, 'L',1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(191,191, 191);
$contador = 1;
while ($row = mysqli_fetch_assoc($datoreporte)) {
    $pdf->Cell(14, 6, $contador, 'B', 0, 'L');

    if ($row['renta']>0) {
    	$pdf->Cell(75, 6, "Venta con renta de cancha", 'B', 0, 'L');
    }else{
    	$pdf->Cell(75, 6, "Venta normal", 'B', 0, 'L');
    }
    $idcli=$row['id_cliente'];
    $clientes = mysqli_query($conexion, "SELECT * FROM cliente WHERE idcliente = $idcli");
	$datosC = mysqli_fetch_assoc($clientes);
    $pdf->Cell(47, 6, utf8_decode($datosC['nombre']), 'B', 0, 'L');

	$pdf->Cell(40, 6, $row['fecha'], 'B', 0, 'L');
    $pdf->Cell(20, 6, "$ ".$row['total'], 'B', 1, 'R');
    $contador++;
}

$datossuma = mysqli_fetch_assoc($SUMA);

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(176, 5, "Total de ventas", 0, 0, 'C',1);
$pdf->Cell(20, 5, "$ ".$datossuma['suma'], 0, 0, 'R',1);
$pdf->SetFont('Arial','I',8);
$pdf->SetTextColor(0, 0, 0);
   




$pdf->Output("ventas.pdf", "I");

?>