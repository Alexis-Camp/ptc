<?php
 include 'layouts/platilla_pdf.php';//Incluye la plantilla
 require 'includes/conexion.php';

$query = "SELECT m.codigo,m.nombres,m.lugar_nacimiento,m.fecha_nacimiento,m.direccion,m.telefono,m.puesto,m.estado FROM empleados";//Consulta SQL
$resultado =$mysqli->query($query);

$pdf = new PDF();
$pdf->AliasPage();//Para mostrar total de paginas del documento
$pdf->AddPage();//Agrega una pagina

$pdf->SetFont('Arial','B',15);//recibe tres parametros, tipo de letra,estilo,tamano
$pdf->SetFillColor(232,232,232);//Agrega un color
$pdf->Cell(70,6,'CODIGO',1,0,'C',1);
$pdf->Cell(70,6,'NOMBRES',1,0,'C',1);
$pdf->Cell(70,6,'LUGAR DE NACIMIENTO',1,0,'C',1);
$pdf->Cell(70,6,'FECHA DE NACIMIENTO',1,0,'C',1);
$pdf->Cell(70,6,'DIRECCION',1,0,'C',1);
$pdf->Cell(70,6,'TELEFONO',1,0,'C',1);
$pdf->Cell(70,6,'PUESTO',1,0,'C',1);
$pdf->Cell(20,6,'ESTADO',1,1,'C',1);
$pdf->Output();//Muestra el estilo del pdf
?>