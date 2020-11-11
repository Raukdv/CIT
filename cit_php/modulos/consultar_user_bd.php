<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-reboot.min.css">

    <title>Consultar</title>
</head>
<div align="center">
  <font size="+3" color="Orange"><strong>Consulta de Todos Los Usuario</strong></font>
  <table align="center" bgcolor="#fff" border="3">
  <?php
  include('../include/conexionBD.php');
  $sql = mysqli_query($link, "SELECT * FROM registro") or die (mysqli_error($link));
  echo"<tr><td>Fecha de Conexion</td><td>Nombres</td><td>Usuarios</td><td>Password</td><td>Nivel de Acceso</td></tr>";
  $i = 0;
  while ($row = mysqli_fetch_row($sql)){
    echo "<tr>
    <td>" .$row[0]."</td>
    <td>" .$row[1]."</td>
    <td>" .$row[2]."</td>
    <td>" .$row[3]."</td>
    <td>" .$row[4]."</td>
    </tr>"; $i++; } ?></table>
    <input type="reset" onClick="window.location='consultar_user.php'" value="Cancelar" class="btn_submit">
</div>
</body>
</html>