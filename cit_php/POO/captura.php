<!-- En caso de usarlo en el index del form, ponerle action="capturar.php"

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



    