<?php
include 'connect.php';  //memanggil file connect.php supaya terkoneksi dengan database
$NIK = $_GET['NIKKU'];
$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='$NIK'");   //melakukan query pada database
$data = mysqli_fetch_array($query);
$Nama_Lengkap = $data['Nama_Lengkap'];
$NIK = $data['NIK'];
$Telepon = $data['Telepon'];
$Alamat = $data['Alamat'];
$Email = $data['Email'];
//melooping pada setiap data hasil query

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profil Admin [G O V L E T]</title>
	<link href="css/style3.css" rel='stylesheet' type='text/css'/>
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
			<script src="js/jquery.min2.js"></script>
			<script>$(document).ready(function(c) {
			$('.alert-close').on('click', function(c){
				$('.main-agile').fadeOut('slow', function(c){
					$('.main-agile').remove();
				});
			});
		});
		</script>
</head>
<body>
	<h1>PROFILE</h1>
		<div class="main-agileits">
		<div class="right-wthree">
			<?php
				if(!empty($data['FotoProfil'])){
					echo $data['FotoProfil'];
				}
				else {

					echo "<img src='fotoprofil.jpg' alt='image' />";
				}
				?>
				<h2>Nama</h2>
				<p><font size="3" color="white"><?php echo $data['Nama_Lengkap'];?></font></p>
			</div>
			<div class="left-w3ls">
			<ul class="address">
													<li>
														<ul class="address-text">
															<li><b>NIK </b></li>
															<li>: </li>
															<li><?php echo $data['NIK'];?></li>
														</ul>
													</li>

													<li>
														<ul class="address-text">
															<li><b>TELEPON </b></li>
															<li>: </li>
															<li><?php echo $data['Telepon'];?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>ALAMAT </b></li>
															<li>: </li>
															<li><?php echo $data['Alamat'];?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>E-MAIL </b></li>
															<li>: </li>
															<li><?php echo $data['Email'];?></li>
														</ul>
													</li>

												</ul>

				<div class="button">
					<a href="EditProfilAdmin.php?NIKKU=<?php echo $data['NIK']?>" class="play-icon popup-with-zoom-anim">Edit Profile</a>
				</div>
				<br>
				<div class="button">
					<a href="CekSurat.html" class="play-icon popup-with-zoom-anim">Cek Surat</a>
				</div>
				<br>
				<div class="button">
					<a href="Logout.php" class="play-icon popup-with-zoom-anim">Log Out</a>
				</div>

			</div>

			<div class="clear"></div>
		</div>
	<footer>
		<p class="agileinfo"> &copy; GOVLET 2017</p>
	</footer>
</body>
</html>
