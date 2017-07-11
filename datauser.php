<?php

//buka koneksi ke database
include 'connect.php';  

//ambil data di table datauser dengan user berlevel user
$query = mysqli_query($con,"SELECT * FROM datauser WHERE Sebagai='user'");

?>

<table border="1">
<tr>
	<th>NIK</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Telepon</th>
	<th>Alamat</th>
	<th>Foto</th>
</tr>
<tbody>
<?php
while($a = mysqli_fetch_array($query)){
	echo "<tr>";
	echo "<td>".$a['NIK']."</td>";	
	echo "<td>".$a['Nama_Lengkap']."</td>";
	echo "<td>".$a['Email']."</td>";
	echo "<td>".$a['Telepon']."</td>";
	echo "<td>".$a['Alamat']."</td>";

	//cek jika foto ada
	if($a['FotoProfil'] != ""){
		echo "<td><img src='data:image/jpeg;base64,".base64_encode($a['FotoProfil'])."'/></td>";
	}
	else{
		echo "<td>Tidak ada foto</td>";
	}
	echo "</tr>";
}
?>
</tbody>
</table>