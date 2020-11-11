<?php
if ($_GET){
echo"<script language='JavaScript' type ='text/JavaScript'>
alert('Accion no permitida')
window.location='../index.php'
</script>
";
exit();
//Inicio para la actualizacion de Datos en la BD //
}else{
include("../include/conexionBD.php");
 $id_user=$_POST['id_user'];
 $nombre=$_POST['nombre'];
 $usuario=$_POST['usuario'];
 $password=$_POST['password'];
 $nivel_acces=$_POST['nivel_acces'];
//sentencia SQL + PHP
$actualizar=mysqli_query($link, "UPDATE registro SET nombre ='$nombre', usuario='$usuario', password='$password', nivel_acces='$nivel_acces' WHERE id_user='$id_user'") or die ("No se puede actualizar datos por: ".mysqli_error($link));

mysqli_close($link);
}
echo"<script language='JavaScript' type ='text/JavaScript'>
alert('Se ha actualizado el usuario correctamente')
window.location='../modulos/edit_user.php?1547821421574=$usuario'
</script>
";
exit();