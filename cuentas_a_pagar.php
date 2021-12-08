<?php

include 'conexiondb.php';

session_start();



if (!isset($_SESSION['id'])) {



  header('Location:/');
}




$connect = conexion_db();

if (mysqli_connect_errno()) {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



//Tabla efectivo

$fetch = mysqli_query($connect, "SELECT id, detalle, importe, mes, pago FROM cuentas where tarjeta != 'Si'");

//suma de servicios donde el campo si no este marcado

$fetch2 = mysqli_query($connect, "SELECT ROUND(SUM(importe), 2) FROM cuentas WHERE pago ='' AND tarjeta != 'Si'");





//tabla tarjeta

$fetch3 = mysqli_query($connect, "SELECT id, detalle, importe, mes, cuota, pago FROM cuentas where tarjeta = 'Si'");



$fetch4 = mysqli_query($connect, "SELECT ROUND(SUM(importe), 2) FROM cuentas WHERE pago ='' AND  tarjeta = 'Si'");



include 'header.php';
include 'navbar.php';


?>


<style>




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



              <form method="post" action="agregar_tabla_4">

                <div class="login-wrap">

                  <div class="input-group">

                    <span class="input-group-addon"><label style="width: 80px">Detalle</label></span>

                    <input id="detalle" name="detalle" type="text" class="form-control" style="width: 50%" required="">

                  </div>

                  <br>

                  <div class="input-group">

                    <span class="input-group-addon"><label style="width: 80px">Importe</label></span>

                    <input id="importe" name="importe" type="text" class="form-control" style="width: 50%">

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

                  <button class="btn btn-primary btn-lg " style="width: 30%" type="submit">Agregar</button>

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



                    while ($row = mysqli_fetch_array($fetch, MYSQLI_NUM)) {



                    ?>

                      <tr>

                        <td><?php echo $row[1]; ?></td>

                        <td><?php echo $row[2]; ?></td>

                        <td><?php echo $row[3]; ?></td>

                        <td><?php echo $row[4]; ?></td>

                        <td><a href="editar_cuentas.php?id=<?php echo $row[0] ?>">Editar</a></td>

                        <td><a href="eliminar_cuenta.php?id=<?php echo $row[0] ?>">Eliminar</a></td>

                      </tr>



                    <?php

                    }

                    ?>

                  </tbody>



                  <?php



                  //obtengo la suma de servicios distintos de si  

                  $row_sum = mysqli_fetch_array($fetch2, MYSQLI_NUM);



                  ?>

                  <td><?php echo "TOTAL:$" . $row_sum[0] ?></td>

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



                  while ($row2 = mysqli_fetch_array($fetch3, MYSQLI_NUM)) {



                  ?>



                    <tbody>

                      <tr>

                        <td><?php echo $row2[1]; ?></td>

                        <td><?php echo $row2[2]; ?></td>

                        <td><?php echo $row2[3]; ?></td>

                        <td><?php echo $row2[4]; ?></td>

                        <td><?php echo $row2[5]; ?></td>

                        <td><a href="editar_cuentas.php?id=<?php echo $row2[0] ?>">Editar</a></td>

                        <td><a href="eliminar_cuenta.php?id=<?php echo $row2[0] ?>">Eliminar</a></td>

                      </tr>

                    </tbody>



                  <?php

                  }





                  $row_sum2 = mysqli_fetch_array($fetch4, MYSQLI_NUM);



                  ?>

                  <td><?php echo "TOTAL:$" . $row_sum2[0] ?></td>

                </table>

              </div>





            </section>

          </div>

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

    <?php

    include 'footer.php';

    ?>