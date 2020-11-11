<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-reboot.min.css">

    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">
            <div class="col-sm-6 col-lg-5 border border-primary">
                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">

                    <div align="center">Hoy es;
                    <?php echo $fecha=date('d/m/Y');?>

                    <h3>Bienvenido</h3>

                   <!-- Redireccion a inicio.php o registro.php-->
                  <input class="btn__submit" type="button" onClick="window.location='modulos/sesion.php'" value="Iniciar Sesion">
                  
                  <input class="btn__submit" type="button" onClick="window.location='modulos/registro.php'" value="Registarse"><br><br>

                  <div align="center"><input class="btn__submit" type="button" onClick="window.location='POO/index.php'" value="Prueba POO"></div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>