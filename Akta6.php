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

if((!isset($_POST['Akta5']))){
  echo "<meta http-equiv='refresh' content='0; url=Akta5.php'>";
  exit();
}

//melooping pada setiap data hasil query
?>


<!DOCTYPE html>
<head>
  <link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='http://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <link href="css/style5.css" rel="stylesheet" type="text/css">
  <script src="js/js.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='http://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Akta Kelahiran</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' method="post" action="akta_post.php" enctype="multipart/form-data">
            <input type="hidden" name="akta" value="<?php echo base64_encode(serialize($_POST)); ?>">
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Kartu Keluarga - NIK.jpg</label>
            <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="KK_Akta" class='form-control' id='id_first_name' placeholder='NIK' type='file' required>
                </div>
              </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>KTP - NIK.jpg</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="KTP_Akta" class='form-control' id='id_first_name' placeholder='Nama Lengkap' type='file' required>
                </div>
              </div>
            </div>
          </div>



          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Akta/Buku Nikah - NIK.jpg</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input name="Buku_Nikah" class='form-control' id='id_first_name' placeholder='Pekerjaan' type='file' required>
                </div>
              </div>

            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Surat Ket Lahir - NIK.jpg</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input name="Surat_Ket_Lahir" class='form-control' id='id_first_name' placeholder='Pekerjaan' type='file' required>
                </div>
              </div>

            </div>
          </div>


          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Surat Pernyataan - NIK.jpg</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                    <input name="Surat_Pernyataan_Akta" class='form-control' id='id_first_name' placeholder='RT' type='file' required>
                </div>
              </div>

            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Surat Kuasa - NIK.jpg</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                    <input name="Surat_Kuasa" class='form-control' id='id_first_name' placeholder='Kelurahan' type='file' required>
                </div>
              </div>
              </div>
              </div>

              <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Surat Permohonan - NIK.jpg</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                    <input name="Surat_Permohonan" class='form-control' id='id_first_name' placeholder='Kelurahan' type='file' required>
                </div>
              </div>
              </div>
              </div>



<br>

          <div class='form-group'>

            <div class='col-md-offset-7 col-md-3'>

              <input type="submit" name="Akta6" value="Submit" class="btn btn-primary px-4"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
