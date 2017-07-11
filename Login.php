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

    <title>Log In [G O V L E T]</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons2.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style2.css" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1>Login</h1>
                            <p class="text-muted">Sudah memiliki akun?</p>
                            <form method="post" action="Login_Post.php">
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Insert NIK" maxlength="16" placeholder="NIK" name="NIK">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Insert Password" maxlength="8" name="Password">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="submit" class="btn btn-primary px-4" value="Login" />
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-link px-0"></button>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-block text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Yuk buat surat yuk!.</p>
                                <a href="register.html" button type="button" class="btn btn-primary active mt-3">Register Now!</button></a>

                            </div>
                        </div>
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
