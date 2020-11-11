<?php
$ban=$_SERVER['REMOTE_ADDR'];
//Para validar un usuario y sus permisos dentro del sistema//
@session_start();
if(@$_GET["Cerrar"])
{
    session_destroy();
    header("location: ../accion/destroy.php");
}

if(!empty($_SESSION['usuario'])){

$fecha =date("d-m-Y");
@session_start();
$usuario= $_SESSION['usuario'];

include('../include/conexionBD.php');
$buscar = mysqli_query($link, "SELECT * FROM registro WHERE usuario = '$usuario'") or die (mysqli_error($link));

if(mysqli_num_rows($buscar) == 1){
    while($fila = mysqli_fetch_array($buscar)){
    $nombreuser=$fila['nombre'];
    $fec_conex=$fila['fec_conex'];
    $nivel_acces=$fila['nivel_acces'];
    $no_acces= 0;
    //Este codigo puede excluir niveles de acceso y destruir la sesion de dicho usuario, cambiar el 0 por el numero de acceso a excluir, de otro modo el 0 solo hara funcion de degenar conexiones no autentificadas.
    if($nivel_acces == $no_acces){
    echo "<script language='javascript' type='text/JavaScript'>
    alert('Usted no tiene permiso para esta sesion')
    window.location='accion/destroy.php'
    </script>";
        exit();
    }

//fin de lo que dije arriba//
 if ($ban=='192.168.2.000'){
    echo "<script>alert('Su IP esta bloqueada este sitio WEB')</script>";
die(); 

} // linea 36, No quitar
} // linea 21, No quitar
} // linea 20, No quitar
} //linea 11, No quitar
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-reboot.min.css">

    <title>Ajustes</title>
</head>
<body>

    <div class="container-fluid" style="height: 100vh;">
        
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">

            <div class="col-sm-6 col-lg-5 border border-primary">

                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">

                    <div align="center">Hoy es;<?php echo $fecha=date('d/m/Y');?><br><br>

                    <div align="center"><font color="#f67054" size="+1"><strong>Eliga una opcion</strong></font><br><br></div>       
                    <div align="center"><input name="agregar" type="button" onClick="window.location='add_user.php'" value="&nbsp;&nbsp;Agregar usuario&nbsp;&nbsp;" class="btn__submit"><br><br></div>

                    <div align="center"> <input name="editar" type="button" onClick="window.location='edit_user.php'" value="&nbsp;&nbsp;Consultar y Editar Usuario&nbsp;&nbsp;" class="btn__submit"><br><br></div>

                    <div align="center"><input name="eliminar" type="button" onClick="window.location='del_user.php'" value="&nbsp;&nbsp;Eliminar Usuario&nbsp;&nbsp;" class="btn__submit"><br><br></div>

                    <div align="center"><input class="btn__submit" type="button" onClick="window.location='../accion/destroy.php'" value="Cerrar Sesion"><br><br></div> 
    </div>
</div>
</body>
</html>
