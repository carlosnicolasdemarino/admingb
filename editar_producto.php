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
        <form  method="post" action="guardar_producto.php?id=<?php echo $var = $_GET['id'];?>" >
        <div class="login-wrap">
        <div class="input-group">

<?php

include 'conexiondb.php';

    $var = $_GET['id'];

        $connect = conexion_db();

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $fetch = mysqli_query($connect,"SELECT id, producto, precio, cantidad  FROM supermercado where id = $var");

        $row=mysqli_fetch_array($fetch,MYSQLI_NUM);

?>                  
        </div>

        <!-- Servicios -->
        <div class="input-group">
            <h2 style="font-size: 20px">Producto</h2>
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon"><label style="width: 80px">Producto</label></span>
          <input id="producto"name="producto"type="text" class="form-control" autofocus style="width: 50%" value="<?php echo $row[1]?>">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon"><label style="width: 80px">Precio</label></span>
          <input id="precio" name="precio" type="text" class="form-control" style="width: 50%" value="<?php echo $row[2]?>">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon"><label style="width: 80px">Cantidad</label></span>
          <input id="cantidad" name="cantidad" type="text" class="form-control" style="width: 50%" value="<?php echo $row[3]?>">
        </div>
        <br>
        <br>
        <div style="padding-left:40px;text-align:center;">
        <button class="btn btn-primary btn-lg " style="width: 30%" type="submit">Guardar</button>
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