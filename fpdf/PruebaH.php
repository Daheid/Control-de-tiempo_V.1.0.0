<?php

require('fpdf.php');
require('../bbdd/conexion.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      //include '../../recursos/Recurso_conexion_bd.php';//llamamos a la conexion BD

      //$consulta_info = $conexion->query(" select *from hotel ");//traemos datos de la empresa desde BD
      //$dato_info = $consulta_info->fetch_object();
      //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(90); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('Biblioteca Virtual de Aragua'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(228, 100, 0);
      $this->Cell(100); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE USUARIOS"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(228, 100, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(30, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('APELLIDO'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('CEDULA'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('TELEFONO'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('GENERO'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('EDAD'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('HORA'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('FECHA'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('CORREO'), 1, 1, 'C', 1);
   }
   

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(540, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

//include '../../recursos/Recurso_conexion_bd.php';
require '../bbdd/conexion.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta);

$pdf = new PDF();
$pdf->AddPage("landscape"); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

while($row = $resultado->fetch_assoc()){
   $pdf->Cell(30, 10, $row['nombre'], 1, 0, 'C', 0);
   $pdf->Cell(30, 10, $row['apellido'], 1, 0, 'C', 0);
   $pdf->Cell(30, 10, $row['cedula'], 1, 0, 'C', 0);
   $pdf->Cell(25, 10, $row['telefono'], 1, 0, 'C', 0);
   $pdf->Cell(30, 10, $row['genero'], 1, 0, 'C', 0);
   $pdf->Cell(30, 10, $row['edad'], 1, 0, 'C', 0);
   $pdf->Cell(30, 10, $row['hora'], 1, 0, 'C', 0);
   $pdf->Cell(30, 10, $row['fecha'], 1, 1, 'C', 0);
   $pdf->Cell(150, 10, $row['email'], 1, 1, 'C', 0);
};
/* TABLA */
$pdf->Output('REPORTE DE USUARIOS.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
