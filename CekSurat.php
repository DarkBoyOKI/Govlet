<?php
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
$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='".$NIKK."'");   //melakukan query pada database
$data = mysqli_fetch_array($query);
?>
<html>
<head></head>
<body>CEK SURAT <br>
	Dengan NIK : <?php echo $data['NIK'] ?></body><Br><br>
Kembali ke HomePage --> <a href="ProfilWarga.php"><button>home</button></a><br><br><br>
KTP --> <a href="fpdf1.php?NIKKU=<?php echo $data['NIK'] ?>"><button>cetak</button></a><br><br>
AKTA --> <a href="fpdf.php?NIKKU=<?php echo $data['NIK'] ?>"><button>cetak</button></a>
</html>
