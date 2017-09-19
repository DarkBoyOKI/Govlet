<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.5
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <?php
 session_start();
 include 'connect.php';
 //cek apakah user sudah login
 if(!isset($_SESSION['NIK'])){
 die("NIK Anda Tidak Terdaftar Sebagai Admin");//jika belum login jangan lanjut..
 }

 //cek level user
 if($_SESSION['Sebagai']!="Admin"){
 die("Anda Bukan Admin");//jika bukan user jangan lanjut
 }

if(isset($_POST['submit'])){
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$pass = $_POST['password'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$tel = $_POST['telepon'];

	$query = mysqli_query($con,"UPDATE datauser SET NIK = ".$nik.", Nama_Lengkap = '". $nama ."',Password = '". $pass ."',Alamat = '". $alamat ."',Email = '". $email ."',Telepon = ". $tel ." WHERE NIK='".$nik."'");


	if($query){
		header("Location: AdminPage.php?i=1");
	}
	else{
		var_dump(mysqli_error($con));
		exit();
		header("Location: AdminPage.php?i=0");
	}
}

if((isset($_GET['aksi'])) && ($_GET['aksi'] == 'hapus')){
	if(isset($_GET['nik'])){
		$query=mysqli_query($con,"DELETE FROM datauser WHERE NIK=".$_GET['nik']);
		if($query)
			header("Location: AdminPage.php");
	}


}

if((isset($_GET['aksi'])) && ($_GET['aksi'] == 'edit')){
	if(isset($_GET['nik'])){
		$NIK = $_GET['nik'];
		$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='$NIK'");   //melakukan query pada database
		$data = mysqli_fetch_array($query);
		$nama = $data['Nama_Lengkap'];
		$tel = $data['Telepon'];
		$al = $data['Alamat'];
		$em = $data['Email'];
		$pass = $data['Password'];
	}
	else{
		header("Location: AdminPage.php");
	}

}
$query = mysqli_query($con,"SELECT * FROM datauser WHERE Sebagai='User'");



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Govlet &mdash; Goverment Letter</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons4.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style4.css" rel="stylesheet">
    <link href="css/dropdown.css" rel="stylesheet">
     <!-- vtab style  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_vertical_tabs -->


</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Footer options
1. '.footer-fixed'						- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>

            <li class="nav-item px-3">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link dropbtn" onclick="myFunction()" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="images/woman-1254453_640.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">admin</span>
                </a>
                <div id="myDropdown" class="dropdown-content">

                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>

                    <a class="dropdown-item" href="/govletkuh2/govlet/logout.php"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
            </li>

        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="openCity(event, 'DataU')" id="defaultOpen"><i class="fa fa-database"></i>Data User</a>
                   </li>

                   <li class="nav-item">
                        <a href="register_admin.php" class="nav-link" onclick="openCity(event, 'TambahA')"><i class="fa fa-user-plus"></i>Tambah Admin</a>
                     </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Cek Surat</li>
            </ol>

            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">



                            <div id="TambahA" class="card">
                                <h1>tambah admin</h1>
                            </div>


                            <div id="DataU" class="card">
                                <h1>Data User</h1>
                                <?php if((isset($_GET['aksi'])) && ($_GET['aksi'] == 'edit')){  if(isset($NIK)){?>
	                                <form name="edit" method="post">
	                                	NIK : <input type="text" name="nik" value="<?php echo $NIK; ?>" /><br>
	                                	Nama : <input type="text" name="nama" value="<?php echo $nama; ?>" /><br>
	                                	password : <input type="text" name="password" value="<?php echo $pass; ?>" /><br>
	                                	email : <input type="text" name="email" value="<?php echo $em; ?>" /><br>
	                                	alamat : <input type="text" name="alamat" value="<?php echo $al; ?>" /><br>
	                                	telepon : <input type="text" name="telepon" value="<?php echo $tel; ?>" /><br>

	                                	<input type="submit" name="submit" value="Simpan" />
	                                </form>
                                <?php } }  else {
                                	if(isset($_GET['i'])){
                                		if($_GET['i'] == 0 ){
                                			echo "Aksi Error";
                                		}
                                		else{
                                			echo "Aksi Berhasil";
                                		}
                                	}
                                	?>
                                <table border="1">
<tr>
	<th>NIK</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Telepon</th>
	<th>Alamat</th>
	<th>Aksi</th>


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

	echo "<td><a href='AdminPage.php?aksi=edit&nik=".$a['NIK']."'>Edit</a> | <a href='AdminPage.php?aksi=hapus&nik=".$a['NIK']."' onclick=\"return confirm('Hapus?')\">Hapus</a></td>";
	echo "</tr>";

}
?>
</tbody>
</table>
<?php } ?>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </div>


            </div>
            <!-- /.conainer-fluid -->
        </main>

    </div>

    <footer class="app-footer">

        <span class="float-right">Govlet <a href="#">© 2017</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/pace/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>


    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>





    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>

<!--vtab script -->
	<script src="js/vtab.js"></script>
	<script src="js/dropdown.js"></script>

</body>

</html>
