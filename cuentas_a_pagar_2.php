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

        
         //Tabla efectivo
        $fetch = mysqli_query($connect,"SELECT id, detalle, importe, mes, pago FROM cuentas2 where tarjeta != 'Si'");
        //suma de servicios donde el campo si no este marcado
        $fetch2 = mysqli_query($connect,"SELECT ROUND(SUM(importe), 2) FROM cuentas2 WHERE pago ='' AND tarjeta != 'Si'" );
        
     
        //tabla tarjeta
         $fetch3 = mysqli_query($connect,"SELECT id, detalle, importe, mes, cuota, pago FROM cuentas2 where tarjeta = 'Si'");

        $fetch4 = mysqli_query($connect,"SELECT ROUND(SUM(importe), 2) FROM cuentas2 WHERE pago ='' AND  tarjeta = 'Si'");
    


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
  
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

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


        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading" style="text-align: center;">
                Cuentas a pagar
              </header>
              
        <form method="post" action="agregar_tabla_5">
        <div class="login-wrap">
          <div class="input-group">
            <span class="input-group-addon"><label style="width: 80px">Detalle</label></span>
            <input id="detalle" name="detalle" type="text" class="form-control" style="width: 50%" required="">
          </div>
        <br>
          <div class="input-group">
              <span class="input-group-addon"><label style="width: 80px">Importe</label></span>
              <input id="importe" name="importe" type="text" class="form-control" style="width: 50%" >
          </div>
        <br>
          <div class="input-group">
            <span class="input-group-addon"><label style="width: 80px">Mes</label></span>
            <select name="mes" id="mes" class="form-control" style="width: 50%">
              <option value="-"></option>
              <option value="Enero">Enero</option>
              <option value="Febrero">Febrero</option>
              <option value="Marzo">Marzo</option>
              <option value="Abril">Abril</option>
              <option value="Mayo">Mayo</option>
              <option value="Junio">Junio</option>
              <option value="Julio">Julio</option>
              <option value="Agosto">Agosto</option>
              <option value="Septiembre">Septiembre</option>
              <option value="Octubre">Octubre</option>
              <option value="Noviembre">Noviembre</option>
              <option value="Diciembre">Diciembre</option>
            </select>
           </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon"><label style="width: 80px">Cuotas</label></span>
            <select name="cuotas" id="cuotas" class="form-control" style="width: 50%">
              <option value="-"></option>
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
              <option value="11">11</option>
              <option value="12">12</option>
            </select>       
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon"><label style="width: 80px">Pago</label></span>
            <select name="pago" id="pago" class="form-control" style="width: 50%">
              <option value=""></option>
              <option value="Si">Si</option>
            </select>           
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon"><label style="width: 80px">Tarj.cred.</label></span>
            <select name="tarjeta" id="tarjeta" class="form-control" style="width: 50%">
              <option value=""></option>
              <option value="Si">Si</option>
            </select>           
        </div>
        <br>
      </div>
        <div style="padding-left:40px;text-align:center;">
          <button class="btn btn-primary btn-lg " style="width: 30%" type="submit" >Agregar</button>
        </div>
      </form>
      <br>
      <br>
      
        <div class="tab">
		    <button class="tablinks" onclick="selectTab(event, 'Efectivo')" id="defaultOpen">Efectivo</button>
		    <button class="tablinks" onclick="selectTab(event, 'Tarjeta')">Tarjeta de Credito</button>
	    </div>
      
      
       <div id="Efectivo" class="table-responsive tabcontent">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Detalle</th>
                    <th>Importe</th>
                    <th>Mes</th>
                    <th>Pago</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>

                <tbody>
<?php
        
        while($row=mysqli_fetch_array($fetch,MYSQLI_NUM)) {

?> 

                  <tr>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><a href="editar_cuentas_2.php?id=<?php echo $row[0]?>">Editar</a></td>
                    <td><a href="eliminar_cuenta_2.php?id=<?php echo $row[0]?>">Eliminar</a></td>
                  </tr>
<?php
        }
?>
                </tbody>

<?php
        

        //obtengo la suma de servicios distintos de si  
        $row_sum=mysqli_fetch_array($fetch2,MYSQLI_NUM);  

?>
                <td><?php echo "TOTAL:$".$row_sum[0]?></td>
                </table>  
                </div>
                 
       <div id="Tarjeta" class="table-responsive tabcontent">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Detalle</th>
                    <th>Importe</th>
                    <th>Mes</th>
                    <th>Cuota</th>
                    <th>Pago</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>

<?php
        
        while($row2=mysqli_fetch_array($fetch3,MYSQLI_NUM)) {

?> 

                <tbody>
                  <tr>
                    <td><?php echo $row2[1]; ?></td>
                    <td><?php echo $row2[2]; ?></td>
                    <td><?php echo $row2[3]; ?></td>
                    <td><?php echo $row2[4]; ?></td>
                    <td><?php echo $row2[5]; ?></td>
                    <td><a href="editar_cuentas_2.php?id=<?php echo $row2[0]?>">Editar</a></td>
                    <td><a href="eliminar_cuenta_2.php?id=<?php echo $row2[0]?>">Eliminar</a></td>
                  </tr>
                </tbody>

<?php
        }

        //obtengo la suma de servicios distintos de si  
        $row_sum2=mysqli_fetch_array($fetch4,MYSQLI_NUM);  

?>
                <td><?php echo "TOTAL:$".$row_sum2[0]?></td>
                </table>  
                </div>
                
            </section>
            </div>
        </div>
        

        <!-- page end-->
      </section>
    </section>
<script>
function selectTab(evt, tipo) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tipo).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
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

