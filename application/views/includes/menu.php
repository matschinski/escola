
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?= base_url() ?>assets/favicon.ico" type="image/ico">

        <title>Área Administraiva</title>
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/dashboard.css" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.png">


        <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Paper Dashboard 2 by Creative Tim
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url(); ?>assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="<?= base_url(); ?>assets/demo/demo.css" rel="stylesheet" />



        <title>Justified Nav Template for Bootstrap</title>



        <!-- Custom styles for this template -->
        <link href="<?= base_url(); ?>assets/css/justified-nav.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?= base_url(); ?>assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
        
        
        
        
        
        <script src="<?= base_url(); ?>assets/js/core/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url(); ?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url(); ?>assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>

    </head>

    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
            -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="<?= base_url(); ?>assets/img/logo-small.png">
                    </div>
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Menu 
                    <!-- <div class="logo-image-big">
                      <img src="../assets/img/logo-big.png">
                    </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="<?= base_url(); ?>dashboard">
                            <i class="nc-icon nc-bank"></i>
                            <p>Tela Inicial</p>
                        </a>
                    </li>
                      <li>
                        <a href="./notifications.html">
                            <i class="nc-icon nc-ruler-pencil"></i>
                            <p>Alunos</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <i class="nc-icon nc-hat-3"></i>
                            <p>Professores</p>
                        </a>
                    </li>
                      <li>
                        <a href="./user.html">
                            <i class="nc-icon nc-globe-2"></i>
                            <p>Séries</p>
                        </a>
                    </li>
                   
                  
                  
                        <li>
                            <a href="./tables.html">
                                <i class="nc-icon nc-tile-56"></i>
                                <p>Disciplinas</p>
                            </a>
                        </li>
                        <li>
                            <a href="./tables.html">
                                <i class="nc-icon nc-chat-33"></i>
                                <p>Recados</p>
                            </a>
                        </li>
                         <li>
                        <a href="<?= base_url(); ?>usuario">
                            <i class="nc-icon nc-paper"></i>
                            <p>Relatórios</p>
                        </a>
                    </li>
                         <li>
                        <a href="<?= base_url(); ?>usuario">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Usuários</p>
                        </a>
                    </li>
                    <li>
                          <a href="<?= base_url(); ?>dashboard/logout">
                            <i class="nc-icon nc-button-power"></i>
                            <p>Sair</p>
                        </a>
                    </li>  
                </ul>
            </div>
        </div>