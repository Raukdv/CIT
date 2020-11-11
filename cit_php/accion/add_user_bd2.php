<?php
if ($_GET){
 echo"<script language='JavaScript' type='text/JavaScript'>
         alert('Accion no Permitida')
           window.location ='../index.php'
        </script>
       ";
     exit();
}else{
   $nombre=$_POST['nombre'];
   $usuario=$_POST['usuario'];
   $password=$_POST['password'];
   $nivel_acces=1;
  include('../include/conexionBD.php');
$buscar = mysqli_query($link, "SELECT * FROM registro WHERE usuario = '$usuario'")
or die(mysqli_error($link));
if(mysqli_num_rows($buscar) > 0 ){
  echo"<script language='JavaScript' type='text/JavaScript'>
         alert('El Usuario que ingreso ya esta registrado por favor elija otro')
           window.location='../modulos/add_user.php'
        </script>
       ";

     exit();

}else{

$insertar = mysqli_query($link, "INSERT INTO registro VALUES ('', '$nombre', '$usuario', '$password', '$nivel_acces', '');") or die ("Error al tratar de insertar los datos");

     echo"<script language='JavaScript' type='text/JavaScript'>
         alert('El Usuario fue registrado correctamente, Por favor Inicie Sesion')
           window.location='../modulos/sesion.php'
        </script>
       ";
     exit();
  
  }
}
?>