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
	<title>Accessible Profile Widget a Responsive Widget Template  :: w3layouts</title>
	<link href="css/style3.css" rel='stylesheet' type='text/css'/>
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Accessible Profile Widget Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
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
				<img src="images/woman-1254453_640.jpg" alt="image" />
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
					<a href="Edit.html" class="play-icon popup-with-zoom-anim">Edit</a>
				</div>

			</div>

			<div class="clear"></div>
		</div>
	<footer>
		<p class="agileinfo"> &copy; GOVLET 2017 <a href="#"></a></p>
	</footer>
</body>
</html>
