<?php

include ("../include/conexionBD.php");
@session_start();

if(@$_POST["enviado"])
{
	@$usuario=$_POST["usuario"];
	@$password=$_POST["password"];
	$consulta=mysqli_query($link, "select * from registro where usuario='$usuario' and password='$password'")or die(mysqli_error($link));
	if(mysqli_num_rows($consulta))
			{
		$arreglo=mysqli_fetch_array($consulta);
				$_SESSION["usuario"]=$arreglo["usuario"];
				$fec_conex=date("d-m-Y");
$Ssql=mysqli_query($link, "UPDATE registro SET fec_conex = '$fec_conex' WHERE usuario = '$usuario'") or die("No se pudo actualizar datos por: " .mysqli_error($link));

$buscar2 = mysqli_query($link, "SELECT * FROM registro WHERE usuario = '$usuario'") or die (mysqli_error($link));
if(mysqli_num_rows($buscar2) == 1)
{
while($fila = mysqli_fetch_array($buscar2))
{

$nivel= $fila['nivel_acces'];
switch ($nivel) {
case "1":
header("location:../modulos/inicio.php");
break;
case "2":
header ("location:../modulos/sistema.php");
break;
case "3":
header ("location:../modulos/sistema.php");
break;
}
}
		   
}

}else{
	header ("location:notificacion.php?error=1");
}
}

?>

