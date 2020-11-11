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

    <div align="center">Hoy es;
  <?php echo $fecha=date('d/m/Y');?>
 
        <div aling="center"><h2>Buscar Usuario<span></span></h2> 

        <form aling="center" action="consultar_user.php" method="post">

            <div aling="center"><input type="text" name="usuario" placeholder="&#128100; Usuario" required autofocus><br><br></div>

            <div aling="center"><input class="btn__submit" type="submit" value="Buscar"><br><br></div>

            <div aling="center"><input class="btn__submit" type="submit" onClick="window.location='inicio.php'" value="Cancelar"><br><br></div>

            <div align="center"><input class="btn__submit" type="button" onClick="window.location='../accion/destroy.php'" value="Cerrar Sesion"><br><br></div>

        </form>
                        </div>
                  </div>
            </div>
      </div>
</div>

</body>
</html>