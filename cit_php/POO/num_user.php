<?php
        include('../include/conexionBD.php');
        $sql2 = mysqli_query($link, "SELECT * FROM registro") or die(mysqli_error($link));
        $result = ($sql2);
        $numero = mysqli_num_rows($result);
class numero{
      public $PPnumero;  
}

$Pnumero = New numero();
$Pnumero ->PPnumero = $numero;
$numero = ($Pnumero);
