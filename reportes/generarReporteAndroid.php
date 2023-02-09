<?php
require('../fpdf184/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../logo.png',10,8,15);
    // Arial bold 15
    $this->SetFont('Courier','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(75,10,iconv('UTF-8','windows-1252','Ejercicios'),1,0,'C');
    // Salto de línea
    $this->Ln(20);

/*
    $this->SetTextColor(0,126,95);
    $this->SetFont('Times','B',11);
    $this->Cell(10,10,'ID',1,1,'C',0);
    $this->Cell(45,10,'Libro',1,1,'C',0);
    $this->Cell(45,10,'Usuario',1,1,'C',0);
    $this->Cell(35,10,utf8_decode('Fecha de préstamo'),1,1,'C',0);
    $this->Cell(35,10,utf8_decode('Fecha de devolución'),1,1,'C',0);
    $this->Cell(20,10,'Estado',1,1,'C',0);
*/
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,iconv('UTF-8','windows-1252','Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

//Conexión a la base de datos
$conexion = new mysqli("localhost","root","","proyectofinal");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
$sql = "SELECT * FROM ejercicios";
//$sql = "SELECT * FROM asignaturas, ejercicios, temas";
$query = mysqli_query($conexion, $sql);
//$query = mysqli_query($conexion, $sql);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Helvetica','',9);
$flag = 0;

while($row = mysqli_fetch_array($query)){
    $tema = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM temas WHERE idtema=".$row["temas_idtema"].""));
    $asignatura = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM asignaturas WHERE idasignatura=".$tema["asignaturas_idasignatura"].""));
    if($flag==0){
        $pdf->SetFont('Courier','B',15);
        $pdf->Cell(190,10,"Asignatura: ".$asignatura['nombreAsignatura'],0,1,'C',0);
        $pdf->Cell(190,10,"Tema: ".utf8_decode($tema['nombreTema']),0,1,'C',0);
        $flag = 1;
    }
    $pdf->SetFont('Helvetica','',9);
    if($row['tipoEjercicio']=='Ejercicio'){
        //$pdf->Cell(190,10,"Asignatura: ".$asignatura['nombreAsignatura'],1,1,'C',0);
        //$pdf->Cell(190,10,"Tema: ".utf8_decode($tema['nombreTema']),1,1,'C',0);
        //$pdf->Cell(190,10,utf8_decode($row['tipoEjercicio']),1,1,'C',0);
        $pdf->Cell(190,10,utf8_decode("Descripción: ".$row['descripcion']),1,1,'C',0);

  //      $pic = 'data://text/plain;base64,' . base64_encode($row['ejercicio']);
        // extract dimensions from image
  //      $info = getimagesize($pic);
        //$pdf->Image($pic, 10, 30, 100, 50, 'png');
  //      $pdf->Cell(190,50,$pdf->Image($pic, $pdf->GetX(), $pdf->GetY(), 100, 50, 'png'),1,1,'C',0);
        $spl = explode("\n", $row['respuesta']);
        foreach ($spl as $value) {
            $pdf->Cell(190,10,utf8_decode($value),0,1,'L',0);
        }
        //$pdf->Cell(190,10,utf8_decode($row['respuesta']),1,0,'C',1);
        $pdf->Ln();
        $pdf->Cell(190,10,"",0,1,0,0);
    }

    
}
//for($i=1;$i<=40;$i++)
    //$pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
$pdf->Output();

$conexion->close();


?>