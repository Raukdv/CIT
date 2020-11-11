<?php 
if ($_GET){
echo"<script language='JavaScript' type ='text/JavaScript'>
alert('Accion no permitida')
window.location='../index.php'
</script>
";
exit();

//Inicio para la eliminacion del usuario//
}else{
include("../include/conexionBD.php");
$id_user=$_POST['id_user'];

mysqli_query($link, "DELETE FROM registro WHERE id_user='$id_user'") or die ("No se puede eliminar datos por: ".mysqli_error($link));
mysqli_close($link);
unset($link);

echo"<script language='JavaScript' type ='text/JavaScript'>
alert('Se ha eliminado el usuario de manera correcta')
window.location='../modulos/inicio.php'
</script>
";
exit();
}
?>