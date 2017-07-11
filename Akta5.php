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

if((!isset($_POST['Akta4']))){
  echo "<meta http-equiv='refresh' content='0; url=Akta4.php'>";
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
        <form class='form-horizontal' role='form' method="post" action="Akta6.php">
            <input type="hidden" name="akta" value="<?php echo base64_encode(serialize($_POST)); ?>">
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Nomor KK</label>
            <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Nomor_KK_Saksi1" class='form-control' id='id_first_name' placeholder='Nomor KK' type='text'>
                </div>
              </div>
          </div>


          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>NIK Saksi</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="NIK_Saksi1" class='form-control' id='id_first_name' placeholder='NIK Saksi' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Nama Saksi</label>
            <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Nama_Saksi1" class='form-control' id='id_first_name' placeholder='Nama Saksi' type='text'>
                </div>
              </div>
          </div>



            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Umur Saksi</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Umur_Saksi1" class='form-control' id='id_first_name' placeholder='Umur Saksi' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Jenis Kelamin</label>
            <div class='form-group internal'>
                  <div class='col-md-3'>
                <div class='form-group internal'>
                  <select name="Jenis_Kelamin_Saksi1" class='form-control' id='id_equipment'>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
                </div>
          </div>


          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Pekerjaan Saksi</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input name="Pekerjaan_Saksi1" class='form-control' id='id_first_name' placeholder='Pekerjaan Saksi' type='text'>
                </div>
              </div>

            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Alamat</label>
            <div class='col-md-8'>
               <div class='col-md-6'>
                  <input name="Alamat_Saksi1" class='form-control' id='id_comments' placeholder='alamat' rows='3'></textarea>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>RT</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                    <input name="RT_Saksi1" class='form-control' id='id_first_name' placeholder='RT' type='text'>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>RW</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <div class='form-group internal'>
                    <input name="RW_Saksi1" class='form-control' id='id_first_name' placeholder='RW' type='text'>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Desa/Kelurahan</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                    <input name="Kelurahan_Saksi1" class='form-control' id='id_first_name' placeholder='Desa/Kelurahan' type='text'>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Kecamatan</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <div class='form-group internal'>
                    <input name="Kecamatan_Saksi1" class='form-control' id='id_first_name' placeholder='Kecamatan' type='text'>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Kabupaten/Kota</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                    <input name="Kabupaten_Saksi1" class='form-control' id='id_first_name' placeholder='Kabupaten/Kota' type='text'>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Provinsi</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <div class='form-group internal'>
                    <input name="Provinsi_Saksi1" class='form-control' id='id_first_name' placeholder='Provinsi' type='text'>
                </div>
                </div>
              </div>
            </div>
          </div>
<br>

          <div class='form-group'>

            <div class='col-md-offset-7 col-md-3'>
            <button type="submit" name="Akta5" value="1" class="btn btn-primary px-4">Next</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
