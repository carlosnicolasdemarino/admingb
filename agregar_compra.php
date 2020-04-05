<?php



  session_start();



  if(!isset($_SESSION['id'])){



    header('Location:/');



  }



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

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123357435-2"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-123357435-2');

</script>



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

      <a href="index.html" class="logo">Panel de  <span class="lite">Administración</span></a>

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

            <a class="" href="agregar_compra">

                          <i class=icon_document_alt></i>

                          <span>Agregar Compra</span>

                      </a>

          </li>

          <li>

            <a class="" href="supermercado">

                          <i class="icon_cart_alt"></i>

                          <span>Supermercado</span>

                      </a>

          </li>

          <li>

            <a class="" href="validacion">

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



        <form method="post" action="agregar_tabla_2.php">

        <div class="login-wrap">

        <div class="input-group">



        <span class="input-group-addon"><label style="width: 60px">Mes</label></span>

        <input id="mes"name="mes"type="text" class="form-control" autofocus style="width: 50%" required="">

        </div>

        <hr/>

        

         <div class="input-group">

            <h2 style="font-size: 20px">Compras</h2>

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Tipo</label></span>

          <input id="tipo"name="tipo"type="text" class="form-control" autofocus style="width: 50%" required="">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Fecha Compra</label></span>

          <input id="fechacompra" name="fechacompra" type="text" class="form-control" style="width: 50%">

        </div>

        <br>

        <div class="input-group">

          <span class="input-group-addon"><label style="width: 80px">Importe</label></span>

          <input id="importe" name="importe" type="text" class="form-control" style="width: 50%">

        </div>

        <br>

        <!-- fin de compras -->

      </div>

      <div style="padding-left:40px;">

        <button class="btn btn-primary btn-lg " style="width: 30%" type="submit" >Agregar</button>

        </div>

        </div>

      </form>

        <!-- finde de compra -->

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



