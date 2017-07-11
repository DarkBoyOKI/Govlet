<?php
session_start();
include 'connect.php';//sesuaikan dengan nama database anda

$NIK = $_POST['NIK'];
$Password = $_POST['Password'];
$op = $_GET['op'];

if($op=="in"){
$cek = mysqli_query($con, "SELECT * FROM datauser WHERE NIK='".$NIK."' AND Password='".$Password."'");
if(mysqli_num_rows($cek)==1){//jika berhasil akan bernilai 1
$c = mysqli_fetch_array($cek);
$_SESSION['NIK'] = $c['NIK'];
$_SESSION['Sebagai'] = $c['Sebagai'];
if($c['Sebagai']=="Admin"){
header("location:admin/AdminPage.php");
}else if($c['Sebagai']=="User"){
header("location:ProfilWarga.php");
}
}else{
die("password salah <a href=Login.html>kembali</a>");
}
}else if($op=="out"){
unset($_SESSION['NIK']);
unset($_SESSION['Sebagai']);
header("location:index.php");
}
?>
