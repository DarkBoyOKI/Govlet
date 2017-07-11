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
$NIKK = $_SESSION['NIK'];
$query = mysqli_query($con,"SELECT * FROM datauser WHERE NIK='$NIKK'");   //melakukan query pada database
$data = mysqli_fetch_array($query);
$NIK = $data['NIK'];
//melooping pada setiap data hasil query
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-us">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.8)" />
  <title>EKTP</title>
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=63627341970" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="Files/Fonts/Fonts.css?v=63630027496" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="ektp.css?v=50491148400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=63614078466" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-8","PagePath":"ektp","Culture":"DEFAULT","LanguageCode":"EN-US","RelativePath":"","RenderMode":"Export","PageAssociatePath":"ektp","EditorTexts":null};
  </script>
  <script>
			function validateDate(Tanggal_Lahir){
				var re = /^(0[1-9]|1\d|2\d|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d{2}$/;
				return re.test(Tanggal_Lahir);
			}

			function validateForm() {
				var z = document.forms["form1"]["Tanggal_Lahir"].value;
					if(validateDate(z)){

					}
					else{
						alert("Date not valid");
						return false;
					}
			}

		</script>
    <link rel="stylesheet" href="jquery-ui.css" type="text/css"/>
  <script src="jquery-1.10.2.js" type="text/javascript"></script>
  <script src="jquery-ui.js" type="text/javascript"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  <style>
  body {
    background: #f5f5f5;
    margin: 0;
    padding: 20px 0 0 0;
    text-align: center;
    font-size: 16px;
  }
  h1 {
    color: #222;
    font-size: 24px;
  }
  </style>

 </head>
 <body class="RWAuto" data-gl="{&quot;KeywordsHomeNotInherits&quot;:false}">
  <form id="XForm" method="post" onsubmit="return validateForm()" name="form1" enctype="multipart/form-data" action="ektp_Post.php?NIKKU=<?php echo $data['NIK'] ?>">
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WE03baa59f10" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAH" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE03baa59f10">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEb1b9e5f605" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEb1b9e5f605">
          <div class="OECT OECT_Content OECTRel OEDynTag0" style="overflow:hidden">
           <div class="OERelLine OEHAlignC OEVAlignT">
            <div id="WEe047e9606c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  transitions" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEe047e9606c">
              <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
               <div id="WE57c07ee887" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default  hand transitions" style="z-index:7">
                <div class="OESZ OESZ_DivContent OESZG_WE57c07ee887">
                 <img src="WEFiles/Image/WEImage/menu-mobile60x60-WEMENU_MOBILE.png" class="OESZ OESZ_Img OESZG_WE57c07ee887" alt="" />
                </div>
               </div>
               <div id="WEcabf264724" class="BaseDiv RHeight OEWELink OESK_WELink_Default OECenterAV transitions btmobile" style="z-index:7" onclick="return OE.Navigate.open(event,'Logout.php',1)">
                <div class="OESZ OESZ_DivContent OESZG_WEcabf264724">
                 <a class="OESZ OESZ_Link OESZG_WEcabf264724 ContentBox" data-cd="PageLink" href="Logout.php">LOG OUT</a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE3c3fdc30d8" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE3c3fdc30d8">
          <span class="OESZ OESZ_Text OESZG_WE3c3fdc30d8 ContentBox"><span style="font-family:TitilliumText25L;font-size:32px;">KTP</span></span>
         </div>
        </div>
        <div id="WE55387f4958" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE55387f4958">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WEa022d72a1d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WEa022d72a1d">
             <input name="NIK" type="text" class="OESZ OESZ_TextBox OESZG_WEa022d72a1d OEDynTag0" value="<?php echo $data['NIK']?>" disabled />
            </div>
           </div>
           <div id="WE5d5b3174e0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE5d5b3174e0">
             <span class="OESZ OESZ_Text OESZG_WE5d5b3174e0 ContentBox"><span style="font-family:TitilliumText25L;">NIK :</span></span>
            </div>
           </div>
           <div id="WE462ccad754" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WE462ccad754">
             <input name="Nama_Lengkap" type="text" placeholder="Masukan Nama Lengkap" class="OESZ OESZ_TextBox OESZG_WE462ccad754 OEDynTag0" required />
            </div>
           </div>
           <div id="WE6fcc360f06" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE6fcc360f06">
             <span class="OESZ OESZ_Text OESZG_WE6fcc360f06 ContentBox"><span style="font-family:TitilliumText25L;">NAMA LENGKAP :</span></span>
            </div>
           </div>
           <div id="WE0bb2740137" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE0bb2740137">
             <span class="OESZ OESZ_Text OESZG_WE0bb2740137 ContentBox"><span style="font-family:TitilliumText25L;">JENIS KELAMIN :</span></span>
            </div>
           </div>
           <div id="WEbc30c1d348" class="BaseDiv RNone OEWERadioButtonListV2 OESK_WERadioButtonList2_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WEbc30c1d348">
             <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEbc30c1d348" name="Jenis_Kelamin" value="Laki-Laki" checked="checked" />
             <span class="OESZ OESZ_RadioTitle OESZG_WEbc30c1d348">LAKI - LAKI</span>
             <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEbc30c1d348" name="Jenis_Kelamin" value="Perempuan" />
             <span class="OESZ OESZ_RadioTitle OESZG_WEbc30c1d348">PEREMPUAN</span>
            </div>
           </div>
           <div id="WE3c4790ccc9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:19">
            <div class="OESZ OESZ_DivContent OESZG_WE3c4790ccc9">
             <input type="text" id="datepicker" name="Tanggal_Lahir" placeholder="mm/dd/yyyy" class="OESZ OESZ_TextBox OESZG_WE3c4790ccc9 OEDynTag0" required />
            </div>
           </div>
           <div id="WE5bc5907a2e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE5bc5907a2e">
             <span class="OESZ OESZ_Text OESZG_WE5bc5907a2e ContentBox"><span style="font-family:TitilliumText25L;">TANGGAL LAHIR :</span></span>
            </div>
           </div>
           <div id="WEb841ba9c4a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WEb841ba9c4a">
             <span class="OESZ OESZ_Text OESZG_WEb841ba9c4a ContentBox"><span style="font-family:TitilliumText25L;">TEMPAT LAHIR :</span></span>
            </div>
           </div>
           <div id="WE69a3baaae0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:18">
            <div class="OESZ OESZ_DivContent OESZG_WE69a3baaae0">
             <input name="Tempat_Lahir" type="text" placeholder="Masukan Tempat Lahir " class="OESZ OESZ_TextBox OESZG_WE69a3baaae0 OEDynTag0" required />
            </div>
           </div>
           <div id="WE217c327e76" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WE217c327e76">
             <span class="OESZ OESZ_Text OESZG_WE217c327e76 ContentBox"><span style="font-family:TitilliumText25L;">STATUS KAWIN :</span></span>
            </div>
           </div>
           <div id="WEf6648dbda6" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:20">
            <div class="OESZ OESZ_DivContent OESZG_WEf6648dbda6">
             <select class="OESZ OESZ_TextBox OESZG_WEf6648dbda6 OEDynTag0" name="Status_Kawin" required>
               <option value="#">Pilih Salah Satu...</option>
               <option value="Belum Kawin">Belum Kawin</option>
               <option value="Kawin">Kawin</option>
             </select>
            </div>
           </div>
           <div id="WE46e2905aa7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE46e2905aa7">
             <span class="OESZ OESZ_Text OESZG_WE46e2905aa7 ContentBox"><span style="font-family:TitilliumText25L;">AGAMA :</span></span>
            </div>
           </div>
           <div id="WEd700cef524" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:21">
            <div class="OESZ OESZ_DivContent OESZG_WEd700cef524">
             <select class="OESZ OESZ_TextBox OESZG_WEd700cef524 OEDynTag0" name="Agama" required>
               <option value="#">Pilih Salah Satu...</option>
               <option value="Islam">Islam</option>
               <option value="Kristen">Kristen</option>
               <option value="Hindu">Hindu</option>
               <option value="Budha">Budha</option>
               <option value="Atheis">Atheis</option>
             </select>
            </div>
           </div>
           <div id="WEc93fb4dd66" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:31">
            <div class="OESZ OESZ_DivContent OESZG_WEc93fb4dd66">
             <span class="OESZ OESZ_Text OESZG_WEc93fb4dd66 ContentBox"><span style="font-family:TitilliumText25L;">GOLONGAN DARAH :</span></span>
            </div>
           </div>
           <div id="WEa3bd7da635" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:32">
            <div class="OESZ OESZ_DivContent OESZG_WEa3bd7da635">
             <select class="OESZ OESZ_TextBox OESZG_WEa3bd7da635" name="Gol_Darah" required>
               <option value="#">Pilih Salah Satu...</option>
               <option value="A">A</option>
               <option value="B">B</option>
               <option value="AB">AB</option>
               <option value="O">O</option>
             </select>
            </div>
           </div>
           <div id="WE2f609aa6f6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE2f609aa6f6">
             <span class="OESZ OESZ_Text OESZG_WE2f609aa6f6 ContentBox"><span style="font-family:TitilliumText25L;">PEKERJAAN :</span></span>
            </div>
           </div>
           <div id="WE02baf1aa1f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:22">
            <div class="OESZ OESZ_DivContent OESZG_WE02baf1aa1f">
             <input name="Pekerjaan" type="text" class="OESZ OESZ_TextBox OESZG_WE02baf1aa1f OEDynTag0" required />
            </div>
           </div>
           <div id="WE02b82655c9" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:29">
            <div class="OESZ OESZ_DivContent OESZG_WE02b82655c9">
             <span class="OESZ OESZ_Text OESZG_WE02b82655c9 ContentBox"><span style="font-family:TitilliumText25L;">ALAMAT :</span></span>
            </div>
           </div>
           <div id="WE25fa34d837" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:30">
            <div class="OESZ OESZ_DivContent OESZG_WE25fa34d837">
             <input name="Alamat" type="text" class="OESZ OESZ_TextBox OESZG_WE25fa34d837 OEDynTag0" required />
            </div>
           </div>
           <div id="WE05265d9af1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WE05265d9af1">
             <span class="OESZ OESZ_Text OESZG_WE05265d9af1 ContentBox"><span style="font-family:TitilliumText25L;">RT :</span></span>
            </div>
           </div>
           <div id="WE92148b6777" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:23">
            <div class="OESZ OESZ_DivContent OESZG_WE92148b6777">
             <input name="RT" type="text" class="OESZ OESZ_TextBox OESZG_WE92148b6777 OEDynTag0" required />
            </div>
           </div>
           <div id="WE2659622ef2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WE2659622ef2">
             <span class="OESZ OESZ_Text OESZG_WE2659622ef2 ContentBox"><span style="font-family:TitilliumText25L;">RW :</span></span>
            </div>
           </div>
           <div id="WEd9c0309e0b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:24">
            <div class="OESZ OESZ_DivContent OESZG_WEd9c0309e0b">
             <input name="RW" type="text" class="OESZ OESZ_TextBox OESZG_WEd9c0309e0b OEDynTag0" required />
            </div>
           </div>
           <div id="WE178748230c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE178748230c">
             <span class="OESZ OESZ_Text OESZG_WE178748230c ContentBox"><span style="font-family:TitilliumText25L;">KELURAHAN :</span></span>
            </div>
           </div>
           <div id="WEdbd6939c1b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:25">
            <div class="OESZ OESZ_DivContent OESZG_WEdbd6939c1b">
             <input name="Kelurahan" type="text" class="OESZ OESZ_TextBox OESZG_WEdbd6939c1b OEDynTag0" required />
            </div>
           </div>
           <div id="WE365034b18e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE365034b18e">
             <span class="OESZ OESZ_Text OESZG_WE365034b18e ContentBox"><span style="font-family:TitilliumText25L;">KECAMATAN :</span></span>
            </div>
           </div>
           <div id="WEffbb861d53" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:26">
            <div class="OESZ OESZ_DivContent OESZG_WEffbb861d53">
             <input name="Kecamatan" type="text" class="OESZ OESZ_TextBox OESZG_WEffbb861d53 OEDynTag0" required />
            </div>
           </div>
           <div id="WE940d9b200a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WE940d9b200a">
             <span class="OESZ OESZ_Text OESZG_WE940d9b200a ContentBox"><span style="font-family:TitilliumText25L;">KABUPATEN / KOTA :</span></span>
            </div>
           </div>
           <div id="WEfbd80282d2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:27">
            <div class="OESZ OESZ_DivContent OESZG_WEfbd80282d2">
             <input name="Kabupaten" type="text" class="OESZ OESZ_TextBox OESZG_WEfbd80282d2 OEDynTag0" required />
            </div>
           </div>
           <div id="WE7680f64f8e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WE7680f64f8e">
             <span class="OESZ OESZ_Text OESZG_WE7680f64f8e ContentBox"><span style="font-family:TitilliumText25L;">PROVINSI :</span></span>
            </div>
           </div>
           <div id="WE3e1e1f5e4f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:28">
            <div class="OESZ OESZ_DivContent OESZG_WE3e1e1f5e4f">
             <input name="Provinsi" type="text" class="OESZ OESZ_TextBox OESZG_WE3e1e1f5e4f OEDynTag0" required />
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE6b81bdf48d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE6b81bdf48d">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE6c26c5b3e9" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE6c26c5b3e9">
             <span class="OESZ OESZ_Text OESZG_WE6c26c5b3e9 ContentBox"><span style="font-family:TitilliumText25L;">KARTU KELUARGA :</span><span style="font-family:TitilliumText25L;"><br /></span></span>
            </div>
           </div>
           <div id="WEda552be4f8" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WEda552be4f8">
             <input name="KK" class="OESZ OESZ_InputFile OESZG_WEda552be4f8" type="file" />
            </div>
           </div>
           <div id="WEaa9fd8b22d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEaa9fd8b22d">
             <span class="OESZ OESZ_Text OESZG_WEaa9fd8b22d ContentBox"><span style="font-family:TitilliumText25L;">SURAT PENGANTAR RT :</span><span style="font-family:TitilliumText25L;"><br /></span></span>
            </div>
           </div>
           <div id="WE63dd8bf5e3" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE63dd8bf5e3">
             <input name="Surat_Pengantar_RT" class="OESZ OESZ_InputFile OESZG_WE63dd8bf5e3" type="file" />
            </div>
           </div>
           <div id="WE0aa5d18320" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE0aa5d18320">
             <span class="OESZ OESZ_Text OESZG_WE0aa5d18320 ContentBox"><span style="font-family:TitilliumText25L;">SURAT PENGANTAR RW :</span><span style="font-family:TitilliumText25L;"><br /></span></span>
            </div>
           </div>
           <div id="WE298338e4d1" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WE298338e4d1">
             <input name="Surat_Pengantar_RW" class="OESZ OESZ_InputFile OESZG_WE298338e4d1" type="file" />
            </div>
           </div>
           <div id="WE5e0421b0e3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE5e0421b0e3">
             <span class="OESZ OESZ_Text OESZG_WE5e0421b0e3 ContentBox"><span style="font-family:TitilliumText25L;">AKTA KELAHIRAN :</span><span style="font-family:TitilliumText25L;"><br /></span></span>
            </div>
           </div>
           <div id="WE3c10379b56" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE3c10379b56">
             <input name="Akta_Kelahiran" class="OESZ OESZ_InputFile OESZG_WE3c10379b56" type="file" />
            </div>
           </div>
           <div id="WEbeab9a08e9" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEbeab9a08e9">
             <span class="OESZ OESZ_Text OESZG_WEbeab9a08e9 ContentBox"><span style="font-family:TitilliumText25L;">SURAT KETERANGAN PINDAH :</span><span style="font-family:TitilliumText25L;"><br /></span></span>
            </div>
           </div>
           <div id="WE0114ed04bf" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WE0114ed04bf">
             <input name="Surat_Ket_Pindah" class="OESZ OESZ_InputFile OESZG_WE0114ed04bf" type="file" />
            </div>
           </div>
           <div id="WEf770298e6b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WEf770298e6b">
             <span class="OESZ OESZ_Text OESZG_WEf770298e6b ContentBox"><span style="font-family:TitilliumText25L;">SURAT KET. DATANG DARI LUAR NEGERI :</span><span style="font-family:TitilliumText25L;"><br /></span></span>
            </div>
           </div>
           <div id="WE80b7c5c509" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE80b7c5c509">
             <input name="Surat_Ket_Datang_Dari_Luarnegri" class="OESZ OESZ_InputFile OESZG_WE80b7c5c509" type="file" />
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE87ec044276" class="BaseDiv RNone OEWELinkButton OESK_WELinkButton_715411b4" style="z-index:4">
         <div class="OESZ OESZ_DivLeft1 OESZG_WE87ec044276"></div>
         <div class="OESZ OESZ_DivLeft2 OESZG_WE87ec044276"></div>
         <div class="OESZ OESZ_DivLeft3 OESZG_WE87ec044276"></div>
         <div class="OESZ OESZ_DivLeft4 OESZG_WE87ec044276"></div>
         <div class="OESZ OESZ_DivContent OESZG_WE87ec044276">
          <a class="OESZ OESZ_Text OESZG_WE87ec044276 ContentBox"><span style="color:rgb(0, 0, 0);font-family:TitilliumText25L;"><input type="submit" value="SUBMIT"></input></span></a>
         </div>

         <div class="OESZ OESZ_DivRight1 OESZG_WE87ec044276"></div>
         <div class="OESZ OESZ_DivRight2 OESZG_WE87ec044276"></div>
         <div class="OESZ OESZ_DivRight3 OESZG_WE87ec044276"></div>
         <div class="OESZ OESZ_DivRight4 OESZG_WE87ec044276"></div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
   </div>
  </div>
  </form>
 </body>
</html>
