<?php
include 'connect.php';  //memanggil file connect.php supaya terkoneksi dengan database
$NIKK = $_GET['NIKKU'];
$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='".$NIKK."'");   //melakukan query pada database
$data = mysqli_fetch_array($query);
$NIK = $data['NIK'];
?>

<h1>Terima Kasih</h1>
<h2>Permintaan Anda sudah kami terima</h2>
<a href="SuratBaru.php"><button>Menuju halaman utama</button></a>
