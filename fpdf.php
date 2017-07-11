<?php
// pendefinisian folder font pada FPDF
define('FPDF_FONTPATH', 'FPDF/font/');
require('FPDF/fpdf.php');

// seperti sebelunya, kita membuat class anakan dari class FPDF
 class PDF extends FPDF{

  function Header(){
   $this->Image('logo.png',1,1,2.25); // logo
   $this->SetTextColor(128,0,0); // warna tulisan
   $this->SetFont('Arial','B','12'); // font yang digunakan
   // membuat cell dg panjang 19 dan align center 'C'
   $this->Cell(19,1,'Nomor_KK',0,0,'C');
   $this->Ln();
   $this->Cell(19,1,'Nama_Kepala_Kel',0,0,'C');
   $this->Ln();
   $this->SetFont('Arial','B','9');
   $this->SetFillColor(192,192,192); // warna isi
   $this->SetTextColor(0,0,0); // warna teks untuk th
   $this->Cell(6);
   $this->Cell(1,1,'NIK_Pelapor','TB',0,'L',1); // cell dengan panjang 1
   $this->Cell(1,1,'Nama_Pelapor','TB',0,'L',1); // cell dengan panjang 1
   $this->Cell(2,1,'','TB',0,'L',1); // cell dengan panjang 2
   $this->Cell(3,1,'waktu','TB',0,'L',1); // cell dengan panjang 3
   // panjang cell bisa disesuaikan
   $this->Ln();
  }

  function Footer(){
   $this->SetY(-2,5);
   $this->Cell(0,1,$this->PageNo(),0,0,'C');
  }
 }

 $server = "localhost";
 $user = "root";
 $pass = "";
 $data = "datakeluarga";

 $net = new mysqli($server, $user, $pass, $data);

 if($net->connect_error){
  die("Koneksi gagal: ".$net->connect_error);
 }

 $q = "SELECT * from datakeluarga";
 $h = $net->query($q) or die($net->error);
 $i = 0;

 while($d=$h->fetch_array()){
  $cell[$i][0]=$d[0];
  $cell[$i][1]=$d[1];
  $cell[$i][2]=$d[2];
  $i++;
 }
 // orientasi Potrait
 // ukuran cm
 // kertas A4
 $pdf = new PDF('P','cm','A4');
 $pdf->Open();
 $pdf->AliasNbPages();
 $pdf->AddPage();

 $pdf->SetFont('Arial','','8');
 //perulangan untuk membuat tabel
 for($j=0;$j<$i;$j++){
  $pdf->Cell(6);
  $pdf->Cell(1,1,$j+1,'B',0,'C');
  $pdf->Cell(1,1,$cell[$j][0],'B',0,'C');
  $pdf->Cell(2,1,$cell[$j][1],'B',0,'L');
  $pdf->Cell(3,1,$cell[$j][2],'B',0,'L');
  $pdf->Ln();
 }

 $pdf->Output(); // ditampilkan

?>
