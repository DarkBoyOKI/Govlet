<?php
include "connect.php";
require('fpdf/fpdf.php');
session_start();
include 'connect.php';
//cek apakah user sudah login
if(!isset($_SESSION['NIK'])){
die("NIK Anda Tidak Terdaftar Sebagai User");//jika belum login jangan lanjut..
}

//cek level user
if($_SESSION['Sebagai']!="User"){
die("Anda Tidak Terdaftar Sebagai User");//jika bukan user jangan lanjut
}
$NIKK = $_SESSION['NIK'];
$query = mysqli_query($con,"SELECT * FROM datakeluarga WHERE NIK_Pelapor='".$NIKK."'") or die(mysql_error());   //melakukan query pada database
$data = mysqli_fetch_array($query);
$Nomor_KK = $data['Nomor_KK'];
$Nama_Kepala_Keluarga = $data['Nama_Kepala_Keluarga'];
$NIK_Pelapor = $data['NIK_Pelapor'];
$Nama_Pelapor = $data['Nama_Pelapor'];
$waktu = $data['waktu'];
/**


 Judul  : Laporan PDF (portait):
 Level  : Menengah
 Author : Hakko Bio Richard
 Blog   : www.hakkoblogs.com
 Web    : www.niqoweb.com
 Email  : hakkobiorichard@ygmail.com

 Untuk tutorial yang lainnya silahkan berkunjung ke www.hakkoblogs.com

 Butuh jasa pembuatan website, aplikasi, pembuatan program TA dan Skripsi.? Hubungi NiqoWeb ==>> 085694984803

 **/
//Menampilkan data dari tabel di database

//Inisiasi untuk membuat header kolom
//$column_nik = "";
//$column_waktu = "";



//For each row, add the field to the corresponding column
  //  $column_nik = $column_nik.$NIK."\n";
  //  $column_waktu = $column_waktu.$waktu_ktp."\n";



//Create a new PDF file
$pdf = new FPDF('L','mm',array(297,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(125);
$pdf->Cell(30,10,'FORM PENGAMBILAN KTP',0,0,'C');
$pdf->Ln();
$pdf->Cell(125);
$pdf->Cell(30,10,'Silakan datang ke CAPIL terhitung 7 hari dari waktu pengisian',0,0,'C');
$pdf->Ln();


//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(500,500,500);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(100);
$pdf->Cell(60,8,'Nomor_KK',1,0,'C',1);
$pdf->SetX(160);
$pdf->Cell(60,8,'Nama_Kepala_Keluarga',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(60,8,'NIK_Pelapor',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(60,8,'Nama_Pelapor',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(60,8,'waktu',1,0,'C',1);
$pdf->SetX(30);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',12);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(100);
$pdf->MultiCell(60,8,$Nomor_KK,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(60,8,$Nama_Kepala_Keluarga,1,'L');


$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(60,8,$NIK_Pelapor,1,'L');


$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(60,8,$Nama_Pelapor,1,'L');



$pdf->Output();
?>
