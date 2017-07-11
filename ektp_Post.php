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
$NIK = $data['NIK'];
//if($_SERVER['REQUEST_METHOD'] == 'POST'){
// if(isset($_POST['NIK']))
 //{
       $Nama_Lengkap = $_POST['Nama_Lengkap'];
       $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
       $Tanggal_Lahir= $_POST['Tanggal_Lahir'];
       $Tempat_Lahir = $_POST['Tempat_Lahir'];
       $Agama = $_POST['Agama'];
       $Gol_Darah = $_POST['Gol_Darah'];
       $Pekerjaan = $_POST['Pekerjaan'];
       $Status_Kawin = $_POST['Status_Kawin'];
       $Alamat = $_POST['Alamat'];
       $RT = $_POST['RT'];
       $RW = $_POST['RW'];
       $Kelurahan = $_POST['Kelurahan'];
       $Kecamatan = $_POST['Kecamatan'];
       $Kabupaten = $_POST['Kabupaten'];
       $Provinsi = $_POST['Provinsi'];

       $KK = $_FILES['KK']['name'];
       $lokasifoto1 = $_FILES['KK']['tmp_name'];
       $folder1 = "C://xampp/htdocs/govletkuh2/govletkuh/tempat_nympen_foto_hasilKTP/KK/$KK";
       move_uploaded_file($lokasifoto1, "$folder1");

       $Surat_Pengantar_RT = $_FILES['Surat_Pengantar_RT']['name'];
       $lokasifoto2 = $_FILES['Surat_Pengantar_RT']['tmp_name'];
       $folder2 = "C://xampp/htdocs/govletkuh2/govletkuh/tempat_nympen_foto_hasilKTP/SURAT_PENGANTAR_RT/$Surat_Pengantar_RT";
       move_uploaded_file($lokasifoto2, "$folder2");

       $Surat_Pengantar_RW = $_FILES['Surat_Pengantar_RW']['name'];
       $lokasifoto3 = $_FILES['Surat_Pengantar_RW']['tmp_name'];
       $folder3 = "C://xampp/htdocs/govletkuh2/govletkuh/tempat_nympen_foto_hasilKTP/SURAT_PENGANTAR_RW/$Surat_Pengantar_RW";
       $move3 = move_uploaded_file($lokasifoto3, "$folder3");

       $Akta_Kelahiran = $_FILES['Akta_Kelahiran']['name'];
       $lokasifoto4 = $_FILES['Akta_Kelahiran']['tmp_name'];
       $folder4 = "C://xampp/htdocs/govletkuh2/govletkuh/tempat_nympen_foto_hasilKTP/AKTA_KELAHIRAN/$Akta_Kelahiran";
       $move4 = move_uploaded_file($lokasifoto4, "$folder4");

       $Surat_Ket_Pindah = $_FILES['Surat_Ket_Pindah']['name'];
       $lokasifoto5 = $_FILES['Surat_Ket_Pindah']['tmp_name'];
       $folder5 = "C://xampp/htdocs/govletkuh2/govletkuh/tempat_nympen_foto_hasilKTP/SURAT_KETERANGAN_PINDAH/$Surat_Ket_Pindah";
       $move5 = move_uploaded_file($lokasifoto5, "$folder5");

       $Surat_Ket_Datang_Dari_Luarnegri = $_FILES['Surat_Ket_Datang_Dari_Luarnegri']['name'];
       $lokasifoto6 = $_FILES['Surat_Ket_Datang_Dari_Luarnegri']['tmp_name'];
       $folder6 = "C://xampp/htdocs/govletkuh2/govletkuh/tempat_nympen_foto_hasilKTP/SURAT_KETERANGAN_DATANG_DARI_LUAR_NEGERI/$Surat_Ket_Datang_Dari_Luarnegri";
       $move6 = move_uploaded_file($lokasifoto6, "$folder6");


      // function ubahTanggal($Tanggal_Lahir){//
 //$pisah = explode('/',$Tanggal_Lahir);
 //$array = array($pisah[2],$pisah[0],$pisah[1]);
 //$satukan = implode('-',$array);
 //return $satukan;
//}
//$Tanggal_Lahir1 = $satukan;
//$Tanggal_Lahir1 = function ubahTanggal('$Tanggal_Lahir');

       //if ($_POST['Password2']==$_POST['Password'] ) {
//proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password
      // if(!empty($NIK)){
        // Memeriksa apakah variabel judul dan pengarang sudah terisi,jika sudah jalankan query dibawah
            $in = mysqli_query($con,"INSERT INTO myktpk(NIK,Nama_Lengkap,Jenis_Kelamin,Tanggal_Lahir,
              Tempat_Lahir,Agama,Gol_Darah,Pekerjaan,Status_Kawin,Alamat,RT,RW,Kelurahan,Kecamatan,Kabupaten,Provinsi,
              KK,Surat_Pengantar_RT,Surat_Pengantar_RW,Akta_Kelahiran,Surat_Ket_Pindah,Surat_Ket_Datang_Dari_Luarnegri)
              VALUES('".$NIK."','$Nama_Lengkap','$Jenis_Kelamin','$Tanggal_Lahir','$Tempat_Lahir','$Agama','$Gol_Darah',
              '$Pekerjaan','$Status_Kawin','$Alamat','$RT','$RW','$Kelurahan','$Kecamatan','$Kabupaten','$Provinsi','$KK',
'$Surat_Pengantar_RT','$Surat_Pengantar_RW','$Akta_Kelahiran','$Surat_Ket_Pindah','$Surat_Ket_Datang_Dari_Luarnegri')");

           if(!$in) {
            echo "<script>window.alert('Anda gagal memasukan data anda, Silahkan input kembali');window.location=('ktp.php');</script>";
          } else {
            echo "<script>window.alert('Data Anda Telah Terinput... Terima Kasih telah mendaftar');window.location=('/govletkuh2/govletkuh/CekSurat.php');</script>";
         }
      // }
//}
?>
