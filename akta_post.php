<?php
include 'connect.php';

$NIKK = $_GET['NIKKU'];
$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='".$NIKK."'");   //melakukan query pada database
$data = mysqli_fetch_array($query);
$NIK = $data['NIK'];

//if($_SERVER['REQUEST_METHOD'] == 'POST'){
// if(isset($_POST['NIK']))
 //{
 //datakeluarga
       $Nomor_KK = $_POST['Nomor_KK'];
       $Nama_Kepala_Kel = $_POST['Nama_Kepala_Kel'];
       $NIK_Pelapor = $_POST['NIK_Pelapor'];
       $Nama_Pelapor = $_POST['Nama_Pelapor'];
       $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
       $Umur_Pelapor= $_POST['Umur_Pelapor'];
       $Pekerjaan_Pelapor = $_POST['Pekerjaan_Pelapor'];
       $Alamat = $_POST['Alamat'];
       $RT = $_POST['RT'];
       $RW = $_POST['RW'];
       $Kelurahan = $_POST['Kelurahan'];
       $Kecamatan = $_POST['Kecamatan'];
       $Kabupaten = $_POST['Kabupaten'];
       $Provinsi = $_POST['Provinsi'];

//data bayi

       $NIK_Bayi = $_POST['NIK_Bayi'];
       $Nama_Lengkap_Bayi = $_POST['Nama_Lengkap_Bayi'];
       $Jenis_Kelamin_Bayi = $_POST['Jenis_Kelamin_Bayi'];
       $Tempat_Lahir_Bayi= $_POST['Tempat_Lahir_Bayi'];
       $Tempat_Dilahirkan_Bayi = $_POST['Tempat_Dilahirkan_Bayi'];
       $Tanggal_Lahir_Bayi = $_POST['Tanggal_Lahir_Bayi'];
       $Jam = $_POST['Jam'];
       $Kelahiran_Ke = $_POST['Kelahiran_Ke'];
       $Jenis_Kelahiran = $_POST['Jenis_Kelahiran'];
       $Penolong_Kelahiran = $_POST['Penolong_Kelahiran'];
       $Berat_Bayi = $_POST['Berat_Bayi'];
       $Panjang_Bayi = $_POST['Panjang_Bayi'];
       $Tipe_Registrasi = $_POST['Tipe_Registrasi'];

// data ibu
       $NIK_Ibu = $_POST['NIK_Ibu'];
       $Nama_Lengkap_Ibu = $_POST['Nama_Lengkap_Ibu'];
       $Jenis_Kelamin_Ibu = $_POST['Jenis_Kelamin_Ibu'];
       $Tangal_Lahir_Ibu= $_POST['Tanggal_Lahir_Ibu'];
       $Pekerjaan_Ibu = $_POST['Pekerjaan_Ibu'];
       $Alamat_Ibu = $_POST['Alamat_Ibu'];
       $RT_Ibu= $_POST['RT_Ibu'];
       $RW_Ibu = $_POST['RW_Ibu'];
       $Kelurahan = $_POST['Kelurahan_Ibu'];
       $Kecamatan_Ibu = $_POST['Kecamatan_Ibu'];
       $Kabupaten_Ibu = $_POST['Kabupaten_Ibu'];
       $Provinsi_Ibu = $_POST['Provinsi_Ibu'];
       $Kewarga_Ibu = $_POST['Kewarga_ibu'];
       $Kebangsaan_ibu = $_POST['Kebangsaan_ibu'];
       $Tanggal_Perkawinan_Ibu = $_POST['Tanggal_Perkawinan_Ibu'];

//data ayah

        $NIK_Ayah = $_POST['NIK_Ayah'];
        $Nama_Lengkap_Ayah = $_POST['Nama_Lengkap_Ayah'];
        $Jenis_Kelamin_Ayah = $_POST['Jenis_Kelamin_Ayah'];
        $Tangal_Lahir_Ayah = $_POST['Tanggal_Lahir_Ayah'];
        $Pekerjaan_Ayah = $_POST['Pekerjaan_Ayah'];
        $Alamat_Ayah = $_POST['Alamat_Ayah'];
        $RT_Ayah = $_POST['RT_Ayah'];
        $RW_Ayah = $_POST['RW_Ayah'];
        $Kelurahan_Ayah = $_POST['Kelurahan_Ayah'];
        $Kecamatan_Ayah = $_POST['Kecamatan_Ayah'];
        $Kabupaten_Ayah = $_POST['Kabupaten_Ayah'];
        $Provinsi_Ayah = $_POST['Provinsi_Ayah'];
        $Kewarga_Ayah = $_POST['Kewarga_Ayah'];
        $Kebangsaan_Ayah = $_POST['Kebangsaan_Ayah'];
        $Tanggal_Perkawinan_Ayah = $_POST['Tanggal_Perkawinan_Ayah'];

//data saksi 1
        $NIK_Saksi1 = $_POST['NIK_Saksi1'];
        $Nama_Saksi1 = $_POST['Nama_Saksi1'];
        $Umur_Saksi1= $_POST['Umur_Saksi1'];
        $Jenis_Kelamin_Saksi1 = $_POST['Jenis_Kelamin_Saksi1'];
        $Pekerjaan_Saksi1= $_POST['Pekerjaan_Saksi1'];
        $Alamat_Saksi1 = $_POST['Alamat_Saksi1'];
        $RT_Saksi1 = $_POST['RT_Saksi1'];
        $RW_Saksi1 = $_POST['RW_Saksi1'];
        $Kelurahan_Saksi1 = $_POST['Kelurahan_Saksi1'];
        $Kecamatan_Saksi1 = $_POST['Kecamatan_Saksi1'];
        $Kabupaten_Saksi1 = $_POST['Kabupaten_Saksi1'];
        $Provinsi_Saksi1 = $_POST['Provinsi_Saksi1'];
        $Kewarga_Saksi1 = $_POST['Kewarga_Saksi1'];


//Foto upload
$KK_Akta = $_FILES['KK_Akta']['name'];
$lokasifoto1Akta = $_FILES['KK_Akta']['tmp_name'];
$folder_akta1 = "C://xampp/htdocs/govletkuh/Akta/KK_AKTA/$KK_Akta";
move_uploaded_file($lokasifoto1Akta, "$folder_akta1");

$KTP_Akta = $_FILES['KTP_Akta']['name'];
$lokasifoto2Akta = $_FILES['KTP_Akta']['tmp_name'];
$folder_akta2 = "C://xampp/htdocs/govletkuh/Akta/KTP_AKTA/$KTP_Akta";
move_uploaded_file($lokasifoto2Akta, "$folder_akta2");

$Buku_Nikah = $_FILES['Buku_Nikah']['name'];
$lokasifoto3Akta = $_FILES['Buku_Nikah']['tmp_name'];
$folder_akta3 = "C://xampp/htdocs/govletkuh/Akta/BUKU_NIKAH/$Buku_Nikah";
$move3 = move_uploaded_file($lokasifoto3Akta, "$folder_akta3");

$Akta_Ket_Lahir = $_FILES['Surat_Ket_Lahir']['name'];
$lokasifoto4Akta = $_FILES['Surat_Ket_Lahir']['tmp_name'];
$folder_akta4 = "C://xampp/htdocs/govletkuh/Akta/SURAT_LAHIR/$Akta_Ket_Lahir";
$move4 = move_uploaded_file($lokasifoto4Akta, "$folder_akta4");

$Pernyataan_Akta = $_FILES['Surat_Pernyataan_Akta']['name'];
$lokasifoto5Akta = $_FILES['Surat_Pernyataan_Akta']['tmp_name'];
$folder_akta5 = "C://xampp/htdocs/govletkuh/Akta/SURAT_PERNYATAAN_AKTA/$Surat_Pernyataan_Akta";
$move5 = move_uploaded_file($lokasifoto5Akta, "$folder_akta5");

$Surat_Kuasa = $_FILES['Surat_Kuasa']['name'];
$lokasifoto6Akta = $_FILES['Surat_Kuasa']['tmp_name'];
$folder_akta6 = "C://xampp/htdocs/govletkuh/Akta/SURAT_KUASA/$Surat_Kuasa";
$move6 = move_uploaded_file($lokasifoto6Akta, "$folder_akta6");

$Surat_Permohonan = $_FILES['Surat_Permohonan']['name'];
$lokasifoto7Akta = $_FILES['Surat_Permohonan']['tmp_name'];
$folder_akta7 = "C://xampp/htdocs/govletkuh/Akta/SURAT_PERMOHONAN/$Surat_PERMOHONAN";
$move6 = move_uploaded_file($lokasifoto7Akta, "$folder_akta7");
       //if ($_POST['Password2']==$_POST['Password'] ) {
//proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password


      // if(!empty($NIK)){
        // Memeriksa apakah variabel judul dan pengarang sudah terisi,jika sudah jalankan query dibawah
        $in1 = mysqli_query($con,"INSERT INTO datakeluarga(Nomor_KK,Nama_Kepala_Kel,NIK_Pelapor,Nama_Pelapor,
          Jenis_Kelamin,Umur_Pelapor,Pekerjaan_Pelapor,Alamat,RT,RW,Kelurahan,Kecamatan,Kabupaten,Provinsi)
          VALUES('".$Nomor_KK."','$Nama_Kepala_Kel','$NIK_Pelapor','$Jenis_Kelamin','$Umur_Pelapor','$Pekerjaan_Pelapor,'$Alamat',
          '$RT','$RW','$Kelurahan','$Kecamatan','$Kabupaten','$Provinsi')");

          $in2 = mysqli_query($con,"INSERT INTO databayi(NIK_Bayi,Nama_Lengkap_Bayi,Jenis_Kelamin_Bayi,
            Tanggal_Lahir_Bayi,Tempat_Dilahirkan_Bayi,Tempat_Lahir_Bayi,Jam,Kelahiran_Ke,Jenis_Kelahiran,Penolong_Kelahiran,Berat_Bayi,Panjang_Bayi,Tipe_Registrasi)
            VALUES('$NIK_Bayi','$Nama_Lengkap_Bayi','$Jenis_Kelamin_Bayi','$Tanggal_Lahir_Bayi','$Tempat_Dilahirkan_Bayi,'$Tempat_Lahir_Bayi',
            '$Jam','$Kelahiran_Ke','$Jenis_Kelahiran','$Penolong_Kelahiran','$Berat_Bayi','$Panjang_Bayi','$Tipe_Registrasi')");

            $in3 = mysqli_query($con,"INSERT INTO dataibu(NIK_Ibu,Nama_Lengkap_Ibu,
              Jenis_Kelamin_Ibu,Tanggal_Lahir_Ibu,Pekerjaan_Ibu,Alamat_Ibu,RT_Ibu,RW_Ibu,Kelurahan_Ibu,Kecamatan_Ibu,Kabupaten_Ibu,Provinsi_Ibu,
            Kewarga_Ibu,Kebangsaan_ibu,Tanggal_Perkawinan_Ibu)
              VALUES('$NIK_Ibu','$Nama_Lengkap_Ibu','$Jenis_Kelamin_Ibu','$Tanggal_Lahir_Ibu','$Pekerjaan_Ibu,'$Alamat_Ibu',
              '$RT_Ibu','$RW_Ibu','$Kelurahan_Ibu','$Kecamatan_Ibu','$Kabupaten_Ibu','$Provinsi_Ibu','$Kewarga_Ibu','$Kebangsaan_ibu','$Tanggal_Perkawinan_Ibu')");


              $in4 = mysqli_query($con,"INSERT INTO dataayah(NIK_Ayah,Nama_Lengkap_Ayah,
                Jenis_Kelamin_Ayah,Tanggal_Lahir_Ayah,Pekerjaan_Ayah,Alamat_Ayah,RT_Ayah,RW_Ayah,Kelurahan_Ayah,Kecamatan_Ayah,Kabupaten_Ayah,Provinsi_Ayah,
              Kewarga_Ayah,Kebangsaan_Ayah,Tanggal_Perkawinan_Ayah)
                VALUES('$NIK_Ayah','$Nama_Lengkap_Ayah','$Jenis_Kelamin_Ayah','$Tanggal_Lahir_Ayah','$Pekerjaan_Ayah','$Alamat_Ayah',
                '$RT_Ayah','$RW_Ayah','$Kelurahan_Ayah','$Kecamatan_Ayah','$Kabupaten_Ayah','$Provinsi_Ayah','$Kewarga_Ayah','$Kebangsaan_Ayah','$Tanggal_Perkawinan_Ayah')");


                $in5 = mysqli_query($con,"INSERT INTO datasaksi1(NIK_Saksi1,Nama_Saksi1,
                  Jenis_Kelamin_Saksi1,Umur_Saksi1,Pekerjaan_Saksi1,Alamat_Saksi1,RT_Saksi1,RW_Saksi1,Kelurahan_Saksi1,Kecamatan_Saksi1,Kabupaten_Saksi1,Provinsi_Saksi1,
                Kewarga_Saksi1)
                  VALUES('$NIK_Saksi1','$Nama_Saksi1','$Jenis_Kelamin_Saksi1','$Umur_Saksi1','$Pekerjaan_Saksi1','$Alamat_Saksi1',
                  '$RT_Saksi1','$RW_Saksi1','$Kelurahan_Saksi1','$Kecamatan_Saksi1','$Kabupaten_Saksi1','$Provinsi_Saksi1','$Kewarga_Saksi1')");


            $in6 = mysqli_query($con,"INSERT INTO gambarakta(KK_Akta,KTP_Akta,
              Buku_Nikah,Surat_Ket_Lahir,Surat_Pernyataan_Akta,Surat_Kuasa,Surat_Permohonan)
              VALUES('$KK_Akta','$KTP_Akta,'$Buku_Nikah','$Surat_Ket_Lahir','$Surat_Pernyataan_Akta','$Surat_Kuasa',
              '$Surat_Permohonan')");

       if(!($in1 AND $in2 AND $in3 AND $in4 AND $in5 AND $in6)) {
        echo "<script>window.alert('Anda gagal memasukan data anda, Silahkan input kembali');window.location=('Akta1.php?NIKKU=$NIK', 'Akta2.php?NIKKU=$NIK', 'Akta3.php?NIKKU=$NIK',
      'Akta4.php?NIKKU=$NIK', 'Akta5.php?NIKKU=$NIK', 'Akta6.php?NIKKU=$NIK');</script>";
      } else {
        echo "<script>window.alert('Data Anda Telah Terinput... Terima Kasih, Silahkan Cek Surat Anda');window.location=('CekSurat.php);</script>";
     }
  // }
//}
?>
      // }
//}
