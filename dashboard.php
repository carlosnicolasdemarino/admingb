<?php



  session_start();



  if(!isset($_SESSION['id'])){



     header('Location:/');

  

  }

	$hostname="localhost";

	$username="id6652504_gastonbarbaccia";

	$password="ns2b7bfqbf";

	$database="id6652504_gestion";



        $connect = mysqli_connect($hostname,$username,$password,$database);

        if (mysqli_connect_errno()) {

            echo "Failed to connect to MySQL: " . mysqli_connect_error();

        }



        $fetch = mysqli_query($connect,"SELECT id,tipo,fechavto,fechavto2,importe,pago,mes FROM servicios");




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





        <div class="row" >

          <div class="col-sm-12" >

          <header class="panel-heading" style="text-align: center;">
                            Servicios
          </header>

            <section class="panel table-responsive tabcontent">

              <table class="table table-striped">

                <thead>

                  <tr>

                    <th>Tipo</th>

                    <th>Fecha 1er Vto</th>

                    <th>Fecha 2er Vto</th>

                    <th>Importe</th>

                    <th>Mes</th>

                    <th>Pago</th>

                    <th>Editar</th>

                    <th>Eliminar</th>

                  </tr>

                </thead>





<?php

        

        while($row=mysqli_fetch_array($fetch,MYSQLI_NUM)) {



?>            

                <tbody>

                  <tr>

                    <td><?php echo $row[1]?></td>

                    <td><?php echo $row[2]?></td>

                    <td><?php echo $row[3]?></td>

                    <td><?php echo $row[4]?></td>

                    <td><?php echo $row[6]?></td>

                    <td><?php echo $row[5]?></td>

                    <td><a href="editar_servicios.php?id=<?php echo $row[0]?>">Editar</a></td>
                  
                    <td><a href="eliminar_servicios.php?id=<?php echo $row[0]?>">Eliminar</a></td>

                  </tr>

                </tbody>

          

<?php

        }



        //obtengo la suma de servicios distintos de si  

        $row_sum=mysqli_fetch_array($fetch3,MYSQLI_NUM);  



?>



        <td><?php echo "TOTAL:$".$row_sum[0]?></td>

            

              </table>

            </section>

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



