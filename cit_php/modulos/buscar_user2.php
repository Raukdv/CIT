<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-reboot.min.css">
    <title>Editar</title>
</head>
<body>

  <div class="container-fluid" style="height: 100vh;">
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">
            <div class="col-sm-6 col-lg-5 border border-primary">
                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">

    <div align="center">
    <div align="center">Hoy es;
  <?php echo $fecha=date('d/m/Y');?>
</div>
       <div align="center">
          <h2 class="login__title">Editar Usuario<span></span></h2>
       </div>
       <!-- captura de datos para la muestra -->
        <?php
        if($_POST){
        $usuario=$_POST['usuario'];  
        }else{
          $usuario=$_GET['1547821421574'];
        }
        include('../include/conexionBD.php');
        $buscar = mysqli_query($link, "SELECT * FROM registro WHERE usuario='$usuario'") or die (mysqli_error($link));
        if(mysqli_num_rows($buscar) < 1)
        {
          echo"<script language='JavaScript' type='text/JavaScript'>
  alert('El usuario que ingreso no es correcto, verifique he intente de nuevo')
  window.location='../modulos/edit_user.php'
  </script>";
  exit();
        }else{
          while($fila = mysqli_fetch_array($buscar))
        {
        
        //Muestra de datos para su captura //
        ?>
        <form  align="center" action="../accion/edit_user_bd.php" method="post">

            <div align="center"> Nombre <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br><br></div>

            <div align="center"> Usuario <input type="text" name="usuario" value="<?php echo $fila['usuario']; ?>" readonly><br><br></div>

            <div align="center"> Password <input type="password" name="password" value="<?php echo $fila['password']; ?>"><br><br></div>

            <div align="center">Nivel de acceso <input type="text" name="nivel_acces" value="<?php echo $fila['nivel_acces']; ?>"><br><br></div>

            <div align="center"><input class="btn__submit" type="submit" value="Editar usuario"><br><br></div>
            <div align="center"><input type="hidden" name="id_user" value="<?php echo $fila['id_user'];?>"></div>
            <div align="center"><input class="btn__submit" type="button" onClick="window.location='inicio.php'" value="Cencelar"><br><br></div>
            <?php } } ?>
        </form>
    </div>

</div>
</div>
</div>
</div>

</body>
</html>