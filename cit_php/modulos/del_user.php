<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-reboot.min.css">

    <title>Eliminar</title>
</head>
<body>

  <div class="container-fluid" style="height: 100vh;">
        
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">

            <div class="col-sm-6 col-lg-5 border border-primary">

                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;"> 

<!-- Formulario para la busqueda-->
    <div align="center">Hoy es;
    <?php echo $fecha=date ('d/m/Y'); ?><br><br></div>

          <div align="center"><h2>Buscar Usuario<span></span></h2></div>
      
        <form  action="buscar_deluser.php" method="post">   

            <div align="center"><input type="text" name="usuario" placeholder="&#128100; Usuario" required autofocus><br><br></div>

            <div align="center"><input class="btn__submit" type="submit" value="Buscar"><br><br></div>

            <div align="center"><input class="btn__submit" type="submit" onClick="window.location='inicio.php'" value="Atras"><br><br></div>

            <div align="center"><input class="btn__submit" type="button" onClick="window.location='../accion/destroy.php'" value="Cerrar Sesion"><br><br></div>
        </form>
    </div>
</div>
</div>
</div>
</body>
</html>