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
$NIK = $_SESSION['NIK'];
$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='$NIK'");   //melakukan query pada database
$data = mysqli_fetch_array($query);
	 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>G O V L E T</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="G O V L E T" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons-->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-offcanvass">
		<ul>
			<li class="active"><a href="#" data-nav-section="home">Home</a></li>
			<li><a href="profilWarga.php">Profile</a></li>
			<li><a href="#" data-nav-section="features">Pilih Jenis Surat</a></li>
			<li><a href="Logout.php">Log Out</a></li>
		</ul>
	</div>

	<div id="fh5co-menu" class="navbar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><span>Menu</span> <i></i></a>
					<a href="After Login.html" class="navbar-brand"><span><center><font size="+3">GOVLET</font></center><font size="-4"></font></span></a>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-page">
		<div id="fh5co-wrap">
			<header id="fh5co-hero" data-section="home" role="banner" style="background: url(images/bg_2.jpg) top left; background-size: cover;" >
				<div class="fh5co-overlay"></div>
				<div class="fh5co-intro">
					<div class="container">
						<div class="row">

							<div class="col-md-6 fh5co-text">
								<h2 class="to-animate intro-animate-1">Selamat datang di Govlet!</h2>
								<p class="to-animate intro-animate-2">Silahkan pilih MENU dan buat surat baru anda di pilih jenis surat.</p>

							</div>


						</div>
					</div>
				</div>
			</header>
			<!-- END .header -->

			<div id="fh5co-main">
				<div id="fh5co-clients">
					<div class="container">
						<div class="row text-center">

						</div>
					</div>
				</div>
				<div id="fh5co-features" data-section="features">


					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
								<h2 class="fh5co-lead to-animate">Membuat surat menjadi lebih mudah!</h2>
								<p class="fh5co-sub to-animate">Tidak perlu mendatangi kantor pemerintah, cukup dengan membuka web di rumah saja. Tidak susah dan benar-benar transparan.</p>
							</div>

							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
								<a href="AKTA1.php" class="fh5co-feature to-animate">
									<span class="fh5co-feature-icon"><i class="icon-screen-smartphone"></i></span>
									<h3 class="fh5co-feature-lead">Akta Kelahiran</h3>
									<p class="fh5co-feature-text"></p>
								</a>
							</div>
							<div class="clearfix visible-sm-block"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
								<a href="ktp.php?" class="fh5co-feature to-animate">
									<span class="fh5co-feature-icon"><i class="icon-eye"></i></span>
									<h3 class="fh5co-feature-lead">E-KTP</h3>
									<p class="fh5co-feature-text"></p>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
								<a href="CekSurat.php" class="fh5co-feature to-animate">
									<span class="fh5co-feature-icon"><i class="icon-cloud-download"></i></span>
									<h3 class="fh5co-feature-lead">Cek Surat</h3>
									<p class="fh5co-feature-text">Cek surat kamu disini!</p>
								</a>
							</div>

							<div class="clearfix visible-sm-block"></div>

							<div class="fh5co-spacer fh5co-spacer-sm"></div>


			        	</div>
			       </div>


			    </div>





				<div id="fh5co-subscribe">
					<div class="container">
						<div class="row animate-box">

						</div>
					</div>
				</div>


			</div>
		</div>

		<footer id="fh5co-footer" style="">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">About</h3>
							<ul>
								<li><a href="#">Tour</a></li>
								<li><a href="#">Company</a></li>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">New Features</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">Support</h3>
							<ul>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">More Apps</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-4 col-md-push-3">
							<h3 class="fh5co-lead">More Links</h3>
							<ul>
								<li><a href="#">Feedback</a></li>
								<li><a href="#">Frequently Ask Questions</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">More Apps</a></li>
							</ul>
						</div>

						<div class="col-md-3 col-sm-12 col-md-pull-9">
							<div class="fh5co-footer-logo"><a href="After Login.html">Outline</a></div>
							<p class="fh5co-copyright"><small>&copy; 2015. All Rights Reserved. <br>	by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Images: <a href="http://pexels.com/" target="_blank">Pexels</a></small></p>
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter"></i></a>
								<a href="#"><i class="icon-facebook"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>

					</div>
				</div>
			</div>
		</footer>
	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- toCount -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>




	</body>
</html>
