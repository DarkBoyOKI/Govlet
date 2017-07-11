<?php
include 'connect.php';

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
 if(isset($_POST['NIK']))
 {
       $NIK = $_POST['NIK'];
       $Nama_Lengkap = $_POST['Nama_Lengkap'];
       $Email = $_POST['Email'];
       $Password = $_POST['Password'];
       $Telepon = $_POST['Telepon'];
       $Alamat = $_POST['Alamat'];



       if ($_POST['Password2']==$_POST['Password'] ) {
//proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password



       if(!empty($NIK))
        // Memeriksa apakah variabel judul dan pengarang sudah terisi,jika sudah jalankan query dibawah
            $in = mysqli_query($con,"INSERT INTO datauser (NIK,Nama_Lengkap,Email,Password,Telepon,Alamat,Sebagai,FotoProfil) VALUES('$NIK','$Nama_Lengkap','$Email','$Password','$Telepon','$Alamat','Admin','')");

           if(!$in) { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
             echo "<script>window.alert('User sudah ada yang menggunakan');history.go(-1)</script>";
          } else { // Jika berhasil alihkan ke halaman tampil.php
            echo "<script>window.alert('Akun anda berhasil terdaftar, Silahkan Log In')</script>";
           echo "<meta http-equiv='refresh' content='0; url=Login.html'>";
         }
       //echo "<script>alert('Format email salah, silahkan cek kembali');history.go(-1)</script>";

     }
     else {
     echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
     }
   }
//}
?>
