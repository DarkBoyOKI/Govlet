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

if((!isset($_POST['Akta1']))){
  echo "<meta http-equiv='refresh' content='0; url=Akta1.php'>";
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
        <h5>Kartu Keluarga</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form' method="post" action="Akta3.php">
            <input type="hidden" name="akta" value="<?php echo base64_encode(serialize($_POST)); ?>">
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Nomor KK</label>
            <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Nomor_KK_Bayi" class='form-control' id='id_first_name' placeholder='Nomor KK' type='text'>
                </div>
              </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>NIK Bayi</label>
            <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="NIK_Bayi" class='form-control' id='id_first_name' placeholder='NIK Bayi' type='text'>
                </div>
              </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Nama Lengkap</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Nama_Lengkap_Bayi" class='form-control' id='id_first_name' placeholder='Nama Lengkap' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Jenis Kelamin</label>
            <div class='form-group internal'>
                  <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment' name="Jenis_Kelamin" required>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
                </div>
          </div>

            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Tempat Lahir</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Tempat_Lahir_Bayi" class='form-control' id='id_first_name' placeholder='Tempat Lahir' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Tempat Dilahirkan</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Tempat_Dilahirkan_Bayi" class='form-control' id='id_first_name' placeholder='Tempat Dilahirkan' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Tanggal Lahir</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input name="Tanggal_Lahir_Bayi" class='form-control' id='id_email' placeholder='Tanggal Lahir' type='date'>
                </div>
              </div>

            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Jam</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Jam" class='form-control' id='id_first_name' placeholder='Jam' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Kelahiran Ke</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Kelahiran_Ke" class='form-control' id='id_first_name' placeholder='Kelahiran Ke' type='number'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Jenis Kelahiran</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Jenis_Kelahiran" class='form-control' id='id_first_name' placeholder='Jenis Kelahiran' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Penolong Kelahiran</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select name="Penolong_Kelahiran" class='form-control' id='id_equipment'>
                    <option value="Dokter">Dokter</option>
                    <option value="Bidan">Bidan/Perawat</option>
                    <option value="Dukun">Dukun</option>
                    <option value="Lainnya">Lainnya</option>

                  </select>
                </div>
              </div>

            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Berat Bayi(Kg)</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Berat_Bayi" class='form-control' id='id_first_name' placeholder='Berat Bayi(Kg)' type='text'>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Panjang Bayi(Cm)</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Panjang_Bayi" class='form-control' id='id_first_name' placeholder='Panjang Bayi(Cm)' type='text'>
                </div>
              </div>
            </div>
          </div>


          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Tipe Ragistrasi</label>
            <div class='col-md-8'>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input name="Tipe_Registrasi" class='form-control' id='id_first_name' placeholder='Tipe Ragistrasi' type='text'>
                </div>
              </div>
            </div>
          </div>


<br>

          <div class='form-group'>

            <div class='col-md-offset-7 col-md-3'>
              <button type="submit" name="Akta2" value="1" class="btn btn-primary px-4">Next</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
