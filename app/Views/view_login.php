<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="assets/login/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/login/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/login/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/login/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="assets/login/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/login/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/login/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="assets/login/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/login/util.css">
        <link rel="stylesheet" type="text/css" href="assets/login/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                    <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo site_url('autentica') ?>" method="post">

                        <?php if (session()->getFlashdata('msg')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif; ?>


                        <span class="login100-form-title">
                            Login
                        </span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" id="login" name="login" placeholder="Usuário" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                            <input class="input100"  id="password" type="password"  name="password" placeholder="Senha" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="text-right p-t-13 p-b-23">
                            <span class="txt1">
                                Esqueceu
                            </span>

                            <a href="#" class="txt2">
                                Usuário / Senha?
                            </a>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Entrar
                            </button>
                        </div>

                        <div class="flex-col-c p-t-170 p-b-40">
                            <span class="txt1 p-b-9">
                                <!--							Don’t have an account?-->
                            </span>

                            <a href="#" class="txt3">
                                <!--							Sign up now-->
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>



//            $(document).ready(function () {
//                alert("teste");
//
//            });


        </script>

        <script src="<?php echo site_url('assets/login/bootstrap.min.js') ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo site_url('assets/login/jquery-3.2.1.min.js') ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo site_url('assets/login/animsition.min.js') ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo site_url('assets/login/popper.js') ?>"></script>
        <script src="<?php echo site_url('assets/login/bootstrap.min.js') ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo site_url('assets/login/select2.min.js') ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo site_url('assets/login/moment.min.js') ?>"></script>
        <script src="<?php echo site_url('assets/login/daterangepicker.js') ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo site_url('assets/login/countdowntime.js') ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo site_url('assets/login/main.js') ?>"></script>

    </body>
</html>