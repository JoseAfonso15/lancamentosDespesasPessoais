
<?php
   
 if (isset($tela)) {
  
        $tela =$tela;
    } else {
        $tela = 'view_dashboard';
    }
    
    

    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Painel de Controle</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <!-- Bootstrap 3.3.7 -->
            <link rel="stylesheet" href="<?php echo site_url('assetsAdm/css/bootstrap/bootstrap.min.css') ?>">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="">
            <!-- jvectormap -->
            <link rel="stylesheet" href="<?php echo site_url('assetsAdm/css/jvectormap/jquery-jvectormap.css') ?>">
            <!-- Theme style -->
            <link rel="stylesheet" href="<?php echo site_url('assetsAdm/css/AdminLTE.min.css') ?>">
            <!-- AdminLTE Skins. Choose a skin from the css/skins
                 folder instead of downloading all of them to reduce the load. -->
            <link rel="stylesheet" href="<?php echo site_url('assetsAdm/css/skins/_all-skins.min.css') ?>">


            <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/>
            <link rel="stylesheet" href="<?php echo site_url('assets/css/Ionicons/ionicons.min.css') ?>">
            <!-- daterange picker -->
            <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/daterangepicker.css') ?>">
            <!-- bootstrap datepicker -->
            <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/bootstrap-datepicker.min.css') ?>">
            <!-- iCheck for checkboxes and radio inputs -->
            <link rel="stylesheet" href="<?php echo site_url('assets/css/plugins/all.css') ?>">
            <!-- Bootstrap Color Picker -->
            <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/bootstrap-colorpicker.min.css') ?>">
            <!-- Bootstrap time Picker -->
            <link rel="stylesheet" href="<?php echo site_url('assets/css/plugins/bootstrap-timepicker.min.css') ?>">
            <!-- Select2 -->
          

            <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/dataTables.bootstrap.min.css') ?>">
            <link rel="stylesheet" href="<?php echo site_url('assets/css/select2.min.css') ?>">
           

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

            <!-- Google Font -->
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="<?php echo site_url('assetsAdm/js/jquery/jquery.min.js') ?>"></script>

            <script src="<?php echo site_url('assetsAdm/js/bootstrap/bootstrap.min.js') ?>"></script>

            <script src="<?php echo site_url('assetsAdm/js/fastclick/fastclick.js') ?>"></script>

            <script src="<?php echo site_url('assetsAdm/js/adminlte.min.js') ?>"></script>

            <script src="<?php echo site_url('assetsAdm/js/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>

            <script src="<?php echo site_url('assetsAdm/js/jvectormap/jquery-jvectormap-1.2.2.min_4.js') ?>"></script>

            <script src="<?php echo site_url('assetsAdm/js/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>

            <script  src="<?php echo site_url('assetsAdm/js/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>

            <script src="<?php echo site_url('assetsAdm/js/chart.js/Chart.js') ?>"></script>

                <!--<script src="<?php echo site_url('assetsAdm/js/pages/dashboard2.js') ?>"></script> -->

            <script  src="<?php echo site_url('assetsAdm/js/jquery/demo.js') ?>"></script>



            <script src="<?php echo site_url('assets/js/select2.full.min.js') ?>"></script>
            <!-- InputMask -->
            <script src="<?php echo site_url('assets/js/plugins/jquery.inputmask.js') ?>"></script>
            <script src="<?php echo site_url('assets/js/plugins/jquery.inputmask.date.extensions.js') ?>"></script>
            <script src="<?php echo site_url('assets/js/plugins/jquery.inputmask.extensions.js') ?>"></script>
            <!-- date-range-picker -->
            <script src="<?php echo site_url('assets/js/moment.min.js') ?>"></script>

            <script src="<?php echo site_url('assets/js/bootstrap/daterangepicker.js') ?>"></script>
            <!-- bootstrap datepicker -->
            <script src="<?php echo site_url('assets/js/bootstrap/bootstrap-datepicker.min.js') ?>"></script>
            <!-- bootstrap color picker -->
            <script src="<?php echo site_url('assets/js/bootstrap/bootstrap-colorpicker.min.js') ?>"></script>
            <!-- bootstrap time picker -->
            <script src="<?php echo site_url('assets/js/plugins/bootstrap-timepicker.min.js') ?>"></script>
            <!-- datatble -->

            <script src="<?php echo site_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
            <script src="<?php echo site_url('assets/datatables/dataTables.bootstrap.min.js') ?>"></script>
            <!-- iCheck 1.0.1 -->
            <script src="<?php echo site_url('assets/js/plugins/icheck.min.js') ?>"></script>
            <script src="<?php echo site_url('assets/js/plugins/jquery.validate.min.js') ?>"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        </head>
        <body class="hold-transition skin-blue sidebar-mini">
            <div class="wrapper">
                <?php
              // echo view('template/header');
                echo view('template/topbar');
                echo view('template/sidebar');
                echo view('template/configbar');

              if ($tela != '') {
                       
    
                    echo view('telas/'.$tela);
                }
                
               echo view('template/footer');
               echo view('template/controlbar');
               echo view('template/js');
                ?>   

                <!-- /.control-sidebar -->
                <!-- Add the sidebar's background. This div must be placed
                     immediately after the control sidebar -->
                <div class="control-sidebar-bg"></div>

            </div>

        </body>
    </html>
 
