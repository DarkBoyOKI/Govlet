<<?php
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
$Nama_Lengkap = $data['Nama_Lengkap'];
$Telepon = $data['Telepon'];
$Alamat = $data['Alamat'];
$Email = $data['Email'];
//melooping pada setiap data hasil query

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Profil [G O V L E T]</title>
  <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
  <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />




<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="EditWarga_Post.php?NIKKU=<?php echo $data['NIK']?>">
	<div class="row">
      <!-- left column -->
      <div class="main-agileits">
  		<div class="right-wthree">
  				<?php
  				 	if(!empty($data['FotoProfil'])){
  						echo "<img width='30%' src='images/".$data['FotoProfil']."' alt='avatar' class='avatar img-circle'>";
  					}
  					else {

  						echo "<img src='fotoprofil.jpg' alt='image' />";
  					}
  					?>


          <h6>Upload a different photo...</h6>

          <input class="form-control" name="FotoProfil" type="file">
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
<br>
        <h3>Personal info</h3>

        <div class="form-group">
          <label class="col-lg-3 control-label">NIK:</label>
          <div class="col-lg-8">
            <input name="NIK" class="form-control" placeholder="NIK" maxlength="16" type="text" value="<?php echo $data['NIK'];?>" disabled>
          </div>
        </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Lengkap:</label>
            <div class="col-lg-8">
              <input name="Nama_Lengkap" class="form-control" placeholder="Nama Lengkap" maxlength="25" type="text" value="<?php echo $data['Nama_Lengkap'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input name="Email" class="form-control" placeholder="Email" type="text" value="<?php echo $data['Email'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Telepon:</label>
            <div class="col-lg-8">
              <input name="Telepon" class="form-control" placeholder="Telepon" maxlength="12" type="text" value="<?php echo $data['Telepon'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Alamat:</label>
            <div class="col-md-8">
              <input name="Alamat" class="form-control" placeholder="Alamat" type="text" value="<?php echo $data['Alamat'];?>">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="submit">
              <span></span>
            </div>
          </div>
      </div>
  </div>
  </form>
</div>


</head>
</html>
