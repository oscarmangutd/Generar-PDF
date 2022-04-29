<?php
require('fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(60,10,'Listado de productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->cell(90,10,'Nombre',1,0,'C',0);
    $this->cell(40,10,'Precio',1,0,'C',0);
    $this->cell(40,10,'Cantidad',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require "conexion.php";
$consulta = "select * from productos";
$resultado = $mysqli-> query($consulta);



$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
while($row = $resultado-> fetch_assoc()){
    $pdf->cell(90,10,$row['nombre_producto'],1,0,'C',0);
    $pdf->cell(40,10,$row['precio'],1,0,'C',0);
    $pdf->cell(40,10,$row['stock_producto'],1,1,'C',0);
}
$pdf->Output();
?>
minuto20

