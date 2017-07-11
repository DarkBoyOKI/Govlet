<?php
include 'connect.php';
$NIKK = $_GET['NIKKU'];
$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='".$NIKK."'");   //melakukan query pada database
   $data = mysqli_fetch_array($query); //melooping pada setiap data hasil query

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $Nama_Lengkap = $_POST['Nama_Lengkap'];
       $Email = $_POST['Email'];
       $Telepon = $_POST['Telepon'];
       $Alamat = $_POST['Alamat'];
       $lokasifoto = $_FILES['FotoProfil']['tmp_name'];
       $FotoProfil = $_FILES['FotoProfil']['name'];
       $folder = "images/$FotoProfil";
       $tgl_upload = date("Ymd");
       if (move_uploaded_file($lokasifoto, "$folder")) {


            $in = mysqli_query($con,"UPDATE datauser SET
              NIK = '".$data['NIK']."',
              Nama_Lengkap = '$Nama_Lengkap',
              Email = '$Email',
              Password = '".$data['Password']."',
              Telepon = '$Telepon',
              Alamat = '$Alamat',
              Sebagai = 'User',
              FotoProfil = '$FotoProfil'
               WHERE NIK = '".$data['NIK']."'");


           if(!$in) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
             echo "<script>alert('Data Profil Anda Gagal Di Ubah');history.go(-1)</script>";
          } else { // Jika berhasil alihkan ke halaman tampil.php
              echo "<script>alert('Perubahan Sukses')</script>";
              echo "<meta http-equiv='refresh' content='0; url=ProfilWarga.php'>";
         }
       //echo "<script>alert('Format email salah, silahkan cek kembali');history.go(-1)</script>";
}
else {
  $in = mysqli_query($con,"UPDATE datauser SET
    NIK = '".$data['NIK']."',
    Nama_Lengkap = '$Nama_Lengkap',
    Email = '$Email',
    Password = '".$data['Password']."',
    Telepon = '$Telepon',
    Alamat = '$Alamat',
    Sebagai = 'User',
    FotoProfil = '".$data['FotoProfil']."'
     WHERE NIK = '".$data['NIK']."'");


 if(!$in) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
   echo "<script>alert('Data Profil Anda Gagal Di Ubah');history.go(-1)</script>";
} else { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Perubahan Sukses')</script>";
    echo "<meta http-equiv='refresh' content='0; url=ProfilWarga.php'>";
}
}
?>
