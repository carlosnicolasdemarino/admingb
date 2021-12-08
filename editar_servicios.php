
<?php

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

        <form method="post" action="guardar_serv.php?id=<?php echo $var = $_GET['id']; ?>">

          <div class="login-wrap">

            <div class="input-group">



              <?php

              include 'conexiondb.php';

              $var = $_GET['id'];

              $connect = conexion_db();

              if (mysqli_connect_errno()) {

                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }



              $fetch = mysqli_query($connect, "SELECT id,tipo,fechavto,fechavto2,importe,pago,mes FROM servicios WHERE id = $var");



              $row = mysqli_fetch_array($fetch, MYSQLI_NUM);

              ?>



            </div>



            <!-- Servicios -->

            <div class="input-group">

              <h2 style="font-size: 20px">Servicios</h2>

            </div>

            <br>

            <div class="input-group">

              <span class="input-group-addon"><label style="width: 80px">Tipo</label></span>

              <input id="tipo" name="tipo" type="text" class="form-control" autofocus style="width: 50%" required="" value="<?php echo $row[1] ?>">

            </div>

            <br>

            <div class="input-group">

              <span class="input-group-addon"><label style="width: 80px">Fecha 1er vto</label></span>

              <input id="fechavto" name="fechavto" type="text" class="form-control" style="width: 50%" value="<?php echo $row[2] ?>">

            </div>

            <br>

            <div class="input-group">

              <span class="input-group-addon"><label style="width: 80px">Fecha 2do vto</label></span>

              <input id="fechavto" name="fechavto2" type="text" class="form-control" style="width: 50%" value="<?php echo $row[3] ?>">

            </div>

            <br>

            <div class="input-group">

              <span class="input-group-addon"><label style="width: 80px">Importe</label></span>

              <input id="importe" name="importe" type="text" class="form-control" style="width: 50%" value="<?php echo $row[4] ?>">

            </div>

            <br>

            <div class="input-group">

              <span class="input-group-addon"><label style="width: 80px">Pago</label></span>

              <select name="pago" id="pago" class="form-control" style="width: 50%">
                <?php
                if ($row[5] == 'Si') {
                ?>
                  <option value="<?php echo  $row[5]; ?>"><?php echo  $row[5]; ?></option>

                  <option value=""></option>

              </select>
            <?php
                } else {
            ?>
              <option value="<?php echo  $row[5]; ?>"><?php echo  $row[5]; ?></option>

              <option value="Si">Si</option>

              </select>
            <?php
                }
            ?>



            </select>

            </div>

            <br>

            <div class="input-group">

              <span class="input-group-addon"><label style="width: 80px">Mes</label></span>

              <input id="mes" name="mes" type="text" class="form-control" style="width: 50%" value="<?php echo $row[6] ?>">

            </div>

            <br>

            <div>

              <button class="btn btn-primary btn-lg " style="width: 25%" type="submit">Guardar</button>
              <a  href="dashboard" class="btn btn-primary btn-lg " style="width: 25%" type="submit">Cancelar</a>
            </div>
            

          </div>

        </form>



        <!--Fin de servicios -->



        <!-- page end-->



      </section>



    </section>

<?php

include 'footer.php';

?>