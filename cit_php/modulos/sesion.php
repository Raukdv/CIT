<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-reboot.min.css">

    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">
            <div class="col-sm-6 col-lg-5 border border-primary">
                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">

                    <div align="center">Hoy es;
                    <?php echo $fecha=date('d/m/Y');?>

                    <h3>Iniciar Sesion</h3>

                   <!-- Redireccion a validad.php-->

                    <form action="../accion/validar.php" class="form-group" method="post">
                    <input type="text" name="usuario" placeholder="&#128100; Usuario" required autofocus>
                    <input type="password" name="password" placeholder="&#x1F512; Contraseña" required>
                    <input type="hidden" name="enviado" value="enviado">
                    <input class="btn__submit" type="submit" value="Entrar">
                    <input class="btn__submit" type="button" onClick="window.location='../index.php'" value="Cancelar">
                    </form> 

                </div>
            </div>
        </div>
    </div>
</body>
</html>