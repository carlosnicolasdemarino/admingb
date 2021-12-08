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



$fetch = mysqli_query($connect, "SELECT id,tipo,fechavto,fechavto2,importe,pago,mes FROM servicios");




//suma de servicios donde el campo si no este marcado

$fetch3 = mysqli_query($connect, "SELECT ROUND(SUM(importe), 2) FROM servicios WHERE pago =''");



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





    <div class="row">

      <div class="col-sm-12">

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



            while ($row = mysqli_fetch_array($fetch, MYSQLI_NUM)) {



            ?>

              <tbody>

                <tr>

                  <td><?php echo $row[1] ?></td>

                  <td><?php echo $row[2] ?></td>

                  <td><?php echo $row[3] ?></td>

                  <td><?php echo $row[4] ?></td>

                  <td><?php echo $row[6] ?></td>

                  <td><?php echo $row[5] ?></td>

                  <td><a href="editar_servicios.php?id=<?php echo $row[0] ?>">Editar</a></td>

                  <td><a href="eliminar_servicios.php?id=<?php echo $row[0] ?>">Eliminar</a></td>

                </tr>

              </tbody>



            <?php

            }



            //obtengo la suma de servicios distintos de si  

            $row_sum = mysqli_fetch_array($fetch3, MYSQLI_NUM);



            ?>



            <td><?php echo "TOTAL:$" . $row_sum[0] ?></td>



          </table>

        </section>

      </div>

    </div>


    <!-- page end-->

  </section>

</section>

<?php

  include 'footer.php';

?>