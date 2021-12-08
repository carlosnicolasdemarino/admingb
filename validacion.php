<?php

include 'conexiondb.php';

  session_start();

  if(!isset($_SESSION['id'])){

     header('Location:http:/validacion');
  
  }


        $connect = conexion_db();

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $fetch = mysqli_query($connect,"SELECT id,tipo,fechavto,importe,pago,mes FROM servicios");

        $fetch2 = mysqli_query($connect,"SELECT id,tipo,fechacmp,importe,mes FROM compras");

        //suma de servicios donde el campo si no este marcado
        $fetch3 = mysqli_query($connect,"SELECT ROUND(SUM(importe), 2) FROM servicios WHERE pago =''");

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
    
<?php

include 'footer.php';

?>
