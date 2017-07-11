<?php
include 'connect.php';

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
 if(isset($_POST['NIK']))
 {
       $FotoProfil = $_POST['FotoProfil'];
       $NIK = $_POST['NIK'];
       $Nama_Lengkap = $_POST['Nama_Lengkap'];
       $Email = $_POST['Email'];
       $Password = $_POST['Password'];
       $Telepon = $_POST['Telepon'];
       $Alamat = $_POST['Alamat'];

            $in = mysqli_query($con,"UPDATE datauser SET
              NIK = '$NIK',
              Nama_Lengkap = '$Nama_Lengkap',
              Email = '$Email',
              Password = '$Password',
              Telepon = '$Telepon',
              Alamat = '$Alamat',
              Sebagai = 'Admin',
              FotoProfil = '$FotoProfil'
              WHERE NIK = '$NIK'");

           if(!$in) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
             echo "<script>alert('Data Profil Anda Gagal Di Ubah');history.go(-1)</script>";
          } else { // Jika berhasil alihkan ke halaman tampil.php
            echo "<script>alert('Perubahan Sukses')</script>";
           echo "<meta http-equiv='refresh' content='0; url=ProfilAdmin.php'>";
         }
       //echo "<script>alert('Format email salah, silahkan cek kembali');history.go(-1)</script>";

   }
?>
