<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-reboot.min.css">

    <title>Practica</title>
</head>
<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">
            <div class="col-sm-6 col-lg-5 border border-primary">
                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">

                    <div align="center">Hoy es;
                    <?php echo $fecha=date('d/m/Y');?>

                    <h3>Bienvenido</h3>

                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <p>-------------------------------------------------------------------------</p>
                    <!-- POO de numero de usuario -->
                    <p> El numero de usuarios es; </p>
                    <?php
                    include ('num_user.php'); 
                    echo  $numero -> PPnumero;

                    ?>
                    <!-- Fin de la weba de arriba -->
                    <p>-------------------------------------------------------------------------</p>
                    <!-- POO de un comentario gei-->
                    <p> El Titulo de esta vaina es; </p>
                    <?php
                    include ('trabajos.php');
                    echo  $trabajos -> titulo;
                    ?>
                    <!-- fin de la weba de arriba-->
                    <p>-------------------------------------------------------------------------</p>
                    <p> Agregue los datos para que funcione </p>
                    <!-- en caso de quererlo usar con el captura.php, agregarlo al form action="captura.php", como se esperara enviara los datos a una pantalla diferente y se vaciaran las variables, es decir en el index aparecera que se esta usando variables vacias, si se abre una nueva pestaña con un nuevo dato en el metodo ejemplo: 'Raul', 'Diaz', apareceran reflejado en el index sin ningun problema, es decir el metodo funcionara pero no de la forma correcta. -->
                    <form class="form-group" method="post">
                    <input type="text" name="nombre" placeholder="&#128100; Nombre" required autofocus>
                    <input type="text" name="apellido" placeholder="&#128100; Apellido" required autofocus>
                    <input type="hidden" name="enviado" value="enviado">
                    <input class="btn__submit" type="submit" value="Capturar">

                    <?php

                    // cambiar a get en caso de inicio de sesion
                    if ($_POST){

                    $nombre=$_POST['nombre'];
                    $apellido=$_POST['apellido'];
                    }

                    class captura{

                     public $PPnombre;
                     public $PPapellido;
                    }
                    $Pcaptura = New captura();
                    $Pcaptura -> PPnombre = $nombre;
                    $Pcaptura -> PPapellido = $apellido;
                    $captura = ($Pcaptura);
                    ?>
                    </form>
                    <p>----------------------------Datos Capturados-----------------------------</p>
                    <?php 
                    echo $captura -> PPnombre;

                    echo $captura -> PPapellido;
                    ?>
                    <p>-------------------------------------------------------------------------</p>
                    <div align="center"><input class="btn__submit" type="button" onClick="window.location='../index.php'" value="Cancelar"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>