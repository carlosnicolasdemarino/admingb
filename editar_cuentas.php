<?php

session_start();

if (!isset($_SESSION['id'])) {

  header('Location:http://localhost/admin/');
}

include 'header.php';
include 'navbar.php';

?>

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

    <?php

    include 'conexiondb.php';

    $var = $_GET['id'];



    $connect = $connect = conexion_db();

    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $fetch = mysqli_query($connect, "SELECT id, detalle, importe, mes, cuota, pago FROM cuentas WHERE id = $var");

    $row = mysqli_fetch_array($fetch, MYSQLI_NUM);


    ?>

    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <header class="panel-heading" style="text-align: center;">
            Cuentas a pagar
          </header>

          <form method="post" action="guardar_cuentas.php?id=<?php echo $var; ?>">
            <div class="login-wrap">
              <div class="input-group">
                <span class="input-group-addon"><label style="width: 80px">Detalle</label></span>
                <input id="detalle" name="detalle" type="text" class="form-control" style="width: 50%" required="" value="<?php echo $row[1] ?>">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><label style="width: 80px">Importe</label></span>
                <input id="importe" name="importe" type="text" class="form-control" style="width: 50%" value="<?php echo $row[2] ?>">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><label style="width: 80px">Mes</label></span>
                <select name="mes" id="mes" class="form-control" style="width: 50%">
                  <option value="<?php echo $row[3] ?>"><?php echo $row[3] ?></option>
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
                  <option value="<?php echo $row[4] ?>"><?php echo $row[4] ?></option>
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
                  <option value="-"></option>
                </select>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><label style="width: 80px">Pago</label></span>
                <select name="pago" id="pago" class="form-control" style="width: 50%">
                  <?php
                  if ($row[5] == "") {
                  ?>
                    <option value="<?php echo $row[5] ?>"><?php echo $row[5] ?></option>
                    <option value="Si">Si</option>
                  <?php
                  } else {
                  ?>
                    <option value="<?php echo $row[5] ?>"><?php echo $row[5] ?></option>
                    <option value=""></option>
                  <?php
                  }
                  ?>

                </select>
              </div>
              <br>
            </div>
            <div style="padding-left:40px;text-align:center;">
              <button class="btn btn-primary btn-lg " style="width: 30%" type="submit">Guardar</button>
            </div>
          </form>
          <br>
        </section>
      </div>
    </div>
    <!-- page end-->

  </section>

</section>


<?php

include 'footer.php';

?>