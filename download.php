<?php
require('library/fpdf.php');
include 'config.php';
 
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'LAPORAN DATA TEMAN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'Nama' ,1,0,'C');
$pdf->Cell(75,7,'Jenis Kelamin',1,0,'C');
$pdf->Cell(30,7,'Usia',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($conn,"SELECT * FROM teman");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(50,6, $d['nama'],1,0);
  $pdf->Cell(75,6, $d['jns_kel'],1,0);  
  $pdf->Cell(30,6, $d['usia'],1,1);
  
}
$pdf->Output();

?>