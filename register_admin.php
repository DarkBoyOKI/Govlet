


<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.5
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>


    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <title>Form Register [G O V L E T]</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons2.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style2.css" rel="stylesheet">

    <script>
    			//Function to validate using regular expression
    			//re = pattern
    			function validateEmail(Email) {
    				var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    				return re.test(Email);
    			}
    			function validatePhone(Telepon){
    				var re = /^0([0-9]{11}|[0-9]{10}|[0-9]{9})$/;
    				return re.test(Telepon);
    			}

    			function validateForm() {
    				var y = document.forms["form1"]["Email"].value;
    					if(validateEmail(y)){
    						//Code block when valid
    					}
    					else{
    						//Code block when invalid
    						alert("Email not valid");
    						return false;
    					}
    				var a = document.forms["form1"]["Telepon"].value;
    					if(validatePhone(a)){

    					}
    					else{
    						alert("Phone not valid");
    						return false;
    					}
    			}
    		</script>

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-block p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Daftar Anggota Baru.</p>
                        <form method="post" enctype="multipart/form-data" action="Register_Post.php" onsubmit="return validateForm()" name="form1">
                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" class="form-control" maxlength="25" name="Nama_Lengkap" placeholder="Nama Lengkap">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" class="form-control" maxlength="16" placeholder="NIK" name="NIK">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" placeholder="Email" id="Email" name="Email">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" maxlength="10" placeholder="Password" name="Password">
                        </div>

                        <div class="input-group mb-4">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" class="form-control" maxlength="10" placeholder="Repeat password" name="Password2">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Telepon" maxlength="12" id="Telepon" name="Telepon">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Alamat" name="Alamat">
                        </div>



                        <input type="submit" class="btn btn-block btn-success" value="Create Account" />
                      </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>

</html>
