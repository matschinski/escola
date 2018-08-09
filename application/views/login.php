


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login V12</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="<?= base_url(); ?>login/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>login/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100" style="background-image: url('https://diariodegoias.com.br/images/2018/03/16/quadro_educacao_escola.jpeg');">
                <div class="wrap-login100 p-t-190 p-b-30">
                    <form class="login100-form validate-form" id="login" method="post" action="<?=base_url()?>dashboard/logar" >
                        <div class="login100-form-avatar">
                            <img src="<?= base_url(); ?>login/images/login.png" alt="AVATAR">
                        </div>

                        <span class="login100-form-title p-t-20 p-b-45">
                            Página de Login
                        </span>

                        <div class="wrap-input100 validate-input m-b-10 form-group" data-validate = "Username is required">
                            <input class="input100" type="email" id="inputEmail" name="email" placeholder="Username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-10 form-group" data-validate = "Password is required">
                            <input class="input100" type="password"  id="inputPassword" name="senha" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn p-t-10">
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>

                        

                    </form>
                </div>
            </div>
        </div>




        <!--===============================================================================================-->	
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>

    </body>
</html>
