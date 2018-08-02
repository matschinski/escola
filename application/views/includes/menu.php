
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
        <link rel="icon" href="../../favicon.ico">

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
    </head>










    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Portal Antônio Barella</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">   
                <ul class="nav navbar-nav navbar-right ">


                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Pesquisar...">
                </form>


            </div>
        </div>
    </nav>

    <body>


        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar ">
                    <ul class="nav nav-sidebar" >

                        <li><a href="<?= base_url() ?>dashboard">Tela Inicial</a></li>
                        <li><a href="<?= base_url() ?>usuario">Turnos</a></li>
                        <li><a href="<?= base_url() ?>dashboard/logout">Séries</a></li>
                        <li><a href="<?= base_url() ?>dashboard/logout">Professor</a></li>
                        <li><a href="<?= base_url() ?>dashboard/logout">Disciplina</a></li>
                        <li><a href="<?= base_url() ?>dashboard/logout">Alunos</a></li>
                        <li><a href="<?= base_url() ?>dashboard/logout">Relatório</a></li>
                        <li><a href="<?= base_url() ?>dashboard/logout">Usuários</a></li>
                        <li><a href="<?= base_url() ?>dashboard/logout">Logout</a></li>



                    </ul>

                </div>