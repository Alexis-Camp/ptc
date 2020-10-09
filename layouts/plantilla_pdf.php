<?php
require '../pdf/fpdf/fpdf.php';//agrega las librerias fpdf

class PDF extends FPDF//hereda todo lo de fpdf
{
	function Header(){//cabecera del reportes
		$this->Image('../libs/images/Logo.jpeg', 5, 5, 30 );//Se agrega url de la imagen, posicion en x, posicion en y, tamano de imagen
		$this->SetFont('Arial','B',15);//Agrega fuente diferente para el titulo
		$this->Cell(30);//Salto de linea para que no salga encimado la celda con la imagen
		$this->Cell(120,10, 'Reporte de empleados',0,0,'C');//Agrega una celda, recibe el largo de la celda, alto de la celda, texto que contiene la celda, borde de la celda,salto de linea, alineacion

		$this->Ln(20)//Salto de linea

	}

	function Footer(){//Pie de pagina
		$this->SetY(-15);//Tamano de pie de pagina
		$this->SetFont('Arial','I', 8);
		$this->Cell(0,10, 'Pagina ',$this->PageNo().'/{nb}',0,0,'C' );//Se agrega el pie de pagina, "PageNo es una funcion que agrega el numero de pagina"

	}
}
?>