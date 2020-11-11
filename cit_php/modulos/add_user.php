<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-reboot.min.css">

    <title>Agregar</title>
</head>
<body>
     <div class="container-fluid" style="height: 100vh;">
        
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">

            <div class="col-sm-6 col-lg-5 border border-primary">

                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;"> 
                    
    <div align="center">Hoy es;
    <?php echo $fecha=date('d/m/Y');?>
    </div>
        <div align="center" ><font color="#f67054" size="+1"> <h2>Agregar Usuario<span></span></h2></div>

        <form class="login__form" action="../accion/add_user_bd.php" method="post">

            <div align="center"><input type="text" name="nombre" placeholder="&#128100; nombre" required autofocus></div><br>

            <div align="center"><input type="text" name="usuario" placeholder="&#128100; Usuario" required autofocus></div><br>

            <div align="center" ><input type="password" name="password" placeholder="&#x1F17F; password" required></div><br>

            <!--<div align="center" ><input type="text" name="cedula" placeholder="&#x1F17F; Cedula" required></div><br>--> 

            <!--<div align="center" ><input type="text" name="email" placeholder="&#x1F17F; Correo" required></div><br>-->

            <div align="center" ><input type="text" name="nivel_acces" placeholder="&#10004; Nivel de acceso" required autofocus></div><br>

            <div align="center" ><input class="btn__submit" type="submit" value="Agregar"> </div><br>

             <div align="center" ><input class="btn__submit" type="submit" onClick="window.location='inicio.php'" value="Cancelar"></div><br>

             <div align="center"><input class="btn__submit" type="button" onClick="window.location='../accion/destroy.php'" value="Cerrar Sesion"><br><br></div>
        </form>
    </div>
</body>
</html>