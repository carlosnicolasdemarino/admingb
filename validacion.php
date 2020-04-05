<?php

  session_start();

  if(!isset($_SESSION['id'])){

     header('Location:http:/validacion');
  
  }

	$hostname="localhost";
	$username="u666073011_gaston";
	$password="ns2b7bfqbf";
	$database="u666073011_gestion";

        $connect = mysqli_connect($hostname,$username,$password,$database);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $fetch = mysqli_query($connect,"SELECT id,tipo,fechavto,importe,pago,mes FROM servicios");

        $fetch2 = mysqli_query($connect,"SELECT id,tipo,fechacmp,importe,mes FROM compras");

        //suma de servicios donde el campo si no este marcado
        $fetch3 = mysqli_query($connect,"SELECT ROUND(SUM(importe), 2) FROM servicios WHERE pago =''");




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Panel de Administracion</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a  class="logo">Panel de  <span class="lite">Administración</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                
                            </span>
                            <span class="username">Gaston Barbaccia</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="/cerrar_sesion"><i class="icon_key_alt"></i> Cerrar sesion</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class=""> 
            <a class="" href="dashboard">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li>
            <a class="" href="agregar_servicio">
                          <i class=icon_document_alt></i>
                          <span>Agregar servicio</span>
                      </a>
          </li>
          
          <li>
            <a class="" href="supermercado">
                          <i class="icon_cart_alt"></i>
                          <span>Supermercado</span>
                      </a>
          </li>
          <li>
            <a class="" href="">
                          <i class="icon_document_alt"></i>
                          <span>Cuentas a pagar</span>
                      </a>
          </li>
           <li>
            <a class="" href="/cerrar_sesion">
                          <i class=icon_key_alt></i>
                          <span>Cerrar sesion</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard">Home</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->


        <div class="row">
          <div class="col-sm-12">
            <form class="login-form" action="validacion_access" method="post">
              <header class="panel-heading" style="text-align: center;font-size:20px">
              PIN
              </header>
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input id="contrasena" name="pin" type="password" class="form-control" placeholder="PIN" required="" maxlength="6">
                    </div>
                    <br>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" >Iniciar sesion</button>

                </div>
            </form>
          </div>
        </div>
        

        <!-- page end-->
      </section>
    </section>

  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>

