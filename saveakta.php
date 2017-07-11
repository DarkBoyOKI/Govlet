<?php session_start();
include 'connect.php';  //memanggil file connect.php supaya terkoneksi dengan database
if((!isset($_SESSION['nik'])) || ($_SESSION == 'User')){
  echo "<meta http-equiv='refresh' content='0; url=Login.php'>";
  exit();
}

if((!isset($_POST['Akta6']))){
  echo "<meta http-equiv='refresh' content='0; url=Akta6.php'>";
  exit();
}

//akta6
$akta6 = array($_FILES['KK_Akta'],$_FILES['KTP_Akta'],$_FILES['Buku_Nikah'],$_FILES['Surat_Ket_Lahir'],$_FILES['Surat_Pernyataan_Akta'],$_FILES['Surat_Kuasa'],$_FILES['Surat_Permohonan']);
$insert = array();
$akta5 = unserialize(base64_decode($_POST['akta']));
foreach($akta6 as $a => $b){
	$fp      = fopen($b['tmp_name'], 'r');
	$content = fread($fp, filesize($b['tmp_name']));
	$content = addslashes($content);
	fclose($fp);
	$insert[$a] = $content;
	$filename = $b['name'];
	if($a == 0){
		$target_file = "tempat_nyimpen_foto_hasilAkta/KK_AKTA/";
	}
	else if($a == 1){
		$target_file = "tempat_nyimpen_foto_hasilAkta/KTP_AKTA/";
	}
	else if($a == 2){
		$target_file = "tempat_nyimpen_foto_hasilAkta/BUKU_NIKAH/";
	}
	else if($a == 3){
		$target_file = "tempat_nyimpen_foto_hasilAkta/SURAT_LAHIR/";
	}
	else if($a == 4){
		$target_file = "tempat_nyimpen_foto_hasilAkta/SURAT_PERNYATAAN_AKTA/";
	}
	else if($a == 5){
		$target_file = "tempat_nyimpen_foto_hasilAkta/SURAT_KUASA/";
	}
	else{
		$target_file = "tempat_nyimpen_foto_hasilAkta/SURAT_PERMOHONAN/";
	}
	if (file_exists($target_file.$filename)) {
    	$i=1;
    	$filename="a".$i.$filename;
		while(file_exists($target_file.$filename)){
		 $i++;
		 $filename="a".$i.$b['name'];
		}
	}

	

	$target_file .= $filename;
	 if (move_uploaded_file($b["tmp_name"], $target_file)){
	 	echo "upload sukses: ".$target_file;
	 }
	 else{
	 	echo "upload gagal: ".$target_file;
	 }
}

//$query = mysqli_query($con,"INSERT INTO gambarakta(kartu_keluarga,ktp,akta,sk_lahir,sk_pernyataan,sk_kuasa,sk_permohonan,Nomor_KK) VALUES('$insert[0]','$insert[1]','$insert[2]','$insert[3]','$insert[4]','$insert[5]','$insert[5]','".$akta5['Nomor_KK_Saksi1']."')");   //melakukan query

//if(!$query){
//	var_dump(mysqli_error($con));
//}

//akta5
$nkk = $akta5['Nomor_KK_Saksi1'];
$nik = $akta5['NIK_Saksi1'];
$nm = $akta5['Nama_Saksi1'];
$um = $akta5['Umur_Saksi1'];
$jk = $akta5['Jenis_Kelamin_Saksi1'];
$ps = $akta5['Pekerjaan_Saksi1'];
$al = $akta5['Alamat_Saksi1'];
$rt = $akta5['RT_Saksi1'];
$rw = $akta5['RW_Saksi1'];
$kel = $akta5['Kelurahan_Saksi1'];
$kec = $akta5['Kecamatan_Saksi1'];
$kab = $akta5['Kabupaten_Saksi1'];
$prov = $akta5['Provinsi_Saksi1'];
$akta4 = unserialize(base64_decode($akta5['akta']));
$kw = $akta4['Kewarga_Ayah'];

$query = mysqli_query($con,"INSERT INTO datasaksi1(Nomor_KK,NIK_Saksi1,Nama_Lengkap,Jenis_Kelamin,Umur,Pekerjaan,Alamat,RT,RW,Provinsi,Kabupaten,Kecamatan,Desa,Kewarganegaraan) VALUES('$nkk','$nik','$nm','$jk','$um','$ps','$al','$rt','$rw','$prov','$kab','$kec','$kel','$kw')");   //melakukan query

if(!$query){
	var_dump(mysqli_error($con));
}

//akta4
$akta3 = unserialize(base64_decode($akta4['akta']));
$nkk = $akta4['Nomor_KK_Ayah'];
$nik = $akta4['NIK_Ayah'];
$nm = $akta4['Nama_Lengkap_Ayah'];
$tg = $akta4['Tanggal_Lahir_Ayah'];
$pk = $akta4['Pekerjaan_Ayah'];
$al = $akta4['Alamat_Ayah'];
$rt = $akta4['RT_Ayah'];
$rw = $akta4['RW_Ayah'];
$kel = $akta4['Kelurahan_Ayah'];
$kec = $akta4['Kecamatan_Ayah'];
$kab = $akta4['Kabupaten_Ayah'];
$prov = $akta4['Provinsi_Ayah'];
$kw = $akta4['Kewarga_Ayah'];
$kb = $akta4['Kebangsaan_Ayah'];
$tp = $akta4['Tanggal_Perkawinan_Ayah'];

$query = mysqli_query($con,"INSERT INTO dataayah(Nomor_KK,NIK_Ayah,Nama_Lengkap,Tanggal_Lahir,Pekerjaan,Alamat,RT,RW,Provinsi,Kabupaten,Kecamatan,Desa,Kewarganegaraan,kebangsaan) VALUES('$nkk','$nik','$nm','$tg','$pk','$al','$rt','$rw','$prov','$kab','$kec','$kel','$kw','$kb')");   //melakukan query

if(!$query){
	var_dump(mysqli_error($con));
}


//akta3
$akta2 = unserialize(base64_decode($akta3['akta']));
$nkk = $akta3['Nomor_KK_Ibu'];
$nik = $akta3['NIK_Ibu'];
$nm = $akta3['Nama_Lengkap_Ibu'];
$tg = $akta3['Tanggal_Lahir_Ibu'];
$pk = $akta3['Pekerjaan_Ibu'];
$al = $akta3['Alamat_Ibu'];
$rt = $akta3['RT_Ibu'];
$rw = $akta3['RW_Ibu'];
$kel = $akta3['Kelurahan_Ibu'];
$kec = $akta3['Kecamatan_Ibu'];
$kab = $akta3['Kabupaten_Ibu'];
$prov = $akta3['Provinsi_Ibu'];
$kw = $akta3['Kewarga_Ibu'];
$kb = $akta3['Kebangsaan_ibu'];
$tp = $akta3['Tanggal_Perkawinan_Ibu'];

$query = mysqli_query($con,"INSERT INTO dataibu(Nomor_KK,NIK_Ibu,Nama_Lengkap,Tanggal_Lahir,Pekerjaan,Alamat,RT,RW,Provinsi,Kabupaten,Kecamatan,Desa,Kewarganegaraan,kebangsaan,Tanggal_Perkawinan) VALUES('$nkk','$nik','$nm','$tg','$pk','$al','$rt','$rw','$prov','$kab','$kec','$kel','$kw','$kb','$tp')");   //melakukan query

if(!$query){
	var_dump(mysqli_error($con));
}

//akta2
$akta1 = unserialize(base64_decode($akta2['akta']));
$nkk = $akta2['Nomor_KK_Bayi'];
$nik = $akta2['NIK_Bayi'];
$nm = $akta2['Nama_Lengkap_Bayi'];
$jk = $akta2['Jenis_Kelamin'];
$tl = $akta2['Tempat_Lahir_Bayi'];
$tdl = $akta2['Tempat_Dilahirkan_Bayi'];
$tg = $akta2['Tanggal_Lahir_Bayi'];
$jm = $akta2['Jam'];
$klk = $akta2['Kelahiran_Ke'];
$jkl = $akta2['Jenis_Kelahiran'];
$pn = $akta2['Penolong_Kelahiran'];
$br = $akta2['Berat_Bayi'];
$pjb = $akta2['Panjang_Bayi'];
$tr = $akta2['Tipe_Registrasi'];

$query = mysqli_query($con,"INSERT INTO databayi(Nomor_KK,NIK_Bayi,Nama_Lengkap,Jenis_Kelamin,Tanggal_Lahir,Tempat_Dilahirkan,Tempat_Lahir,Jam,Kelahiran_ke,Jenis_Kelahiran,Penolong_Kelahiran,Berat_Bayi,Panjang_Bayi,Tipe_Registrasi) VALUES('$nkk','$nik','$nm','$jk','$tg','$tdl','$tl','$jm','$klk','$jkl','$pn','$br','$pjb','$tr')");   //melakukan query

if(!$query){
	var_dump(mysqli_error($con));
}

//akta1
$nkk = $akta1['Nomor_KK'];
$nik = $akta1['NIK_Pelapor'];
$nk = $akta1['Nama_Kepala_Kel'];
$nm = $akta1['Nama_Pelapor'];
$jk = $akta1['Jenis_Kelamin'];
$um = $akta1['Umur_Pelapor'];
$pk = $akta1['Pekerjaan_Pelapor'];
$al = $akta1['Alamat'];
$rt = $akta1['RT'];
$rw = $akta1['RW'];
$kel = $akta1['Kelurahan'];
$kec = $akta1['Kecamatan'];
$kab = $akta1['Kabupaten'];
$prov = $akta1['Provinsi'];

$query = mysqli_query($con,"INSERT INTO datakeluarga(Nomor_KK,NIK_Pelapor,Nama_Pelapor,Nama_Kepala_Keluarga,Pekerjaan_Pelapor,Alamat,RT,RW,Provinsi,Kabupaten,Kecamatan,Desa,Jenis_Kelamin) VALUES('$nkk','$nik','$nm','$nk','$pk','$al','$rt','$rw','$prov','$kab','$kec','$kel','$jk')");   //melakukan query

if(!$query){
	var_dump(mysqli_error($con));
}

echo "<script>alert('Data tersimpan')</script>";
echo "<meta http-equiv='refresh' content='0; url=index.html'>";