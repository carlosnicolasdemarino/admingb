<?php



  session_start();



  if(!isset($_SESSION['id'])){



     header(u666073011_gestion);

  

  }

	$hostname="localhost";

	$username="u666073011_gaston";

	$password="ns2b7bfqbf";

	$database="id6652504_gestion";



        $connect = mysqli_connect($hostname,$username,$password,$database);

        if (mysqli_connect_errno()) {

            echo "Failed to connect to MySQL: " . mysqli_connect_error();

        }



        $fetch = mysqli_query($connect,"SELECT id, producto, precio, cantidad, precio_final FROM supermercado");     



        

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

        <!-- Test -->





        <form method="post" action="agregar_tabla_3.php">

        <div class="login-wrap">

          <div class="input-group">

            <div class="input-group">

              <h2 style="font-size: 20px">Productos</h2>

            </div>

          </div>

        <hr/>

          <div class="input-group">

            <span class="input-group-addon"><label style="width: 80px">Producto</label></span>

            <select name="producto" id="producto" class="form-control" style="width: 50%">

                 <option value="Aceite">Aceite </option>

                <option value="Agua en bidon ">Agua en bidon </option>

                <option value="Atun en troso">Atun en troso</option>

                <option value="Atun desmenusado">Atun desmenusado</option>

                <option value="Azucar">Azucar</option>

                <option value="Arroz">Arroz </option>

                <option value="Bola de lomo">Bola de lomo </option>

                <option value="Bolsas de consorcio">Bolsas de consorcio</option>

                <option value="Casancrem">Casancrem </option>

                <option value="Carne picada">Carne picada </option>

                <option value="Caldo Verd.">Caldo Verd.</option>

                <option value="Caldo Carne">Caldo Carne</option>

                <option value="Caldo Azafran">Caldo Azafran</option>

                <option value="Caballa">Caballa </option>

                <option value="Cereal">Cereal </option>

                <option value="Dentifrico">Dentifrico </option>

                <option value="Esponja cocina">Esponja cocina</option>

                <option value="Esponja Acero">Esponja Acero</option>

                <option value="Fideos Guisero">Fideos Guisero </option>

                <option value="Film">Film </option>

                <option value="Fuyi">Fuyi </option>

                <option value="Galletitas oreo">Galletitas oreo</option>

                <option value="Galletitas 9 de oro">Galletitas 9 de oro</option>         

                <option value="Galletitas Bagley">Galletitas Bagley</option>

                <option value="Galletitas hogareñas">Galletitas Hogareñas</option>

                <option value="Guantes">Guantes </option>

                <option value="Grisines">Grisines </option>

                <option value="Harina">Harina </option>

                <option value="Jabon">Jabon</option>

                <option value="Jugos en sobre">Jugos en sobre</option>

                <option value="Jabon liquido">Jabon liquido </option>

                <option value="Jabon el polvo">Jabon el polvo </option>

                <option value="Jugos Botellas">Jugos Botellas </option>

                <option value="Leche">Leche</option>

                <option value="Lentejas">Lentejas </option>

                <option value="Lysoform">Lysoform </option>

                <option value="Mandarinas">Mandarinas </option> 

                <option value="Mermelada">Mermelada </option>

                <option value="Mr. Musculo Rep.">Mr.Musculo Rep. </option> 

                <option value="Mayonesa">Mayonesa </option> 

                <option value="Paleta">Paleta </option>

                <option value="Pan Rallado">Pan Rallado </option>

                <option value="Pan panchos">Pan panchos </option>

                <option value="Pan lactal">Pan lactal </option>

                <option value="Papel Higienico ">Papel Higienico </option>

                <option value="Papas fritas ">Papas fritas </option>

                <option value="Picada especial">Picada especial </option>

                <option value="Pure de tomate">Pure de tomate</option>

                <option value="Puchero">Puchero</option>

                <option value="Procenex">Procenex </option>

                <option value="Pollo">Pollo </option>

                <option value="Protectores">Protectores </option>

                <option value="Polenta">Polenta </option>

                <option value="Rollo de cocina">Rollo de cocina </option>

                <option value="Queso en barra">Queso en barra </option>

                <option value="Queso Cremoso">Queso Cremoso </option>

                <option value="Queso rallado">Queso rallado</option>

                <option value="Queso tallarines">Queso tallarines </option>

                <option value="Queso spagetti">Queso spagetti </option>

                <option value="RAID">RAID </option>

                <option value="Rollo de cocina">Rollo de cocina </option>

                <option value="Salame Calchaqui">Salame Calchaqui</option>

                <option value="Salchichas ">Salchichas </option>

                <option value="Sal fina">Sal fina </option>

                <option value="Savora">Savora </option>

                <option value="Servilleta">Servilleta </option>

                <option value="Sopa Knor">Sopa Knor </option>

                <option value="Suprema">Suprema</option>

                <option value="Speed energizante">Speed energizante</option>

                <option value="Tapa de asado">Tapa de asado</option>

                <option value="Tomate cherri">Tomate cherri</option>

                <option value="Tostadas">Tostadas</option>

                <option value="Yerba">Yerba </option>

                <option value="Yogurt bebible">Yogurt bebible</option>

                <option value="Yogurt entero">Yogurt entero</option>

                <option value="Yogurt Sache">Yogurt Sache</option>

                <option value="Otros">Otros</option>

            </select>

          </div>

        <br>

          <div class="input-group">

            <span class="input-group-addon"><label style="width: 80px">Precio</label></span>

            <input id="precio" name="precio" type="text" class="form-control" style="width: 50%" >

          </div>

        <br>

          <div class="input-group">

            <span class="input-group-addon"><label style="width: 80px">Cantidad</label></span>

            <select name="cantidad" id="cantidad" class="form-control" style="width: 50%">

              <option value="1">1</option>

              <option value="2">2</option>

              <option value="3">3</option>

              <option value="4">4</option>

              <option value="5">5</option>

              <option value="6">6</option>

              <option value="7">7</option>

              <option value="8">8</option>

              <option value="9">9</option>

              <option value="10">10</option>

            </select>

          </div>

        <br>

       

      </div>

        <div style="padding-left:40px;text-align:center;">

          <button class="btn btn-primary btn-lg " style="width: 30%" type="submit" >Agregar</button>

          <button class="btn btn-primary btn-lg " style="width: 30%" type="button" onclick="window.location.href='delete_table'">Nuevo</button>

          </div>

      </form>

      <!-- fin de compras -->

      

    <br>

      

      <!--Tabla de supermercado-->

        <div class="row">

          <div class="col-sm-12">

            <section class="panel">

              <header class="panel-heading" style="text-align: center;">

                Supermercado

              </header>

              <table class="table table-striped">

                <thead>

                  <tr>

                    <th>Producto</th>

                    <th>Precio x/u</th>

                    <th>Cantidad</th>

                    <th>Precio Final</th>

                 <!--   <th>Editar</th>-->

                  </tr>

                </thead>





<?php

        $suma_productos=0;

        

        while($row=mysqli_fetch_array($fetch,MYSQLI_NUM)) {



?>            

                <tbody>

                  <tr>

                    <td><?php echo $row[1]?></td>

                    <td><?php echo "$".$row[2]?></td>

                    <td><?php echo $row[3]?></td>

<?php

                $producto_x_precio=$row[2] * $row[3];

?>                    

                    <td><?php echo "$".$producto_x_precio ?></td>

                    <td><a href="editar_producto.php?id=<?php echo $row[0]?>">Editar</a></td>

                  </tr>

                </tbody>

          

<?php           

        //Se acumula el total de la suma de los productos

                $suma_productos += $producto_x_precio;

        }



        //En total muestro el total de la suma de los precios finales de los productos

        





        

?>

        

        <td><?php echo "TOTAL:$". $suma_productos;?></td>

            

              </table>

            </section>

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



