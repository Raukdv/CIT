<?php
$server="localhost";
$user="root";
$pss="";
$bd="cit";
$link= mysqli_connect($server, $user, $pss, $bd) or die ('fallo la conexion;' .myslqi_error); 
?>