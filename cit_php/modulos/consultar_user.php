<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/css/bootstrap-reboot.min.css">
      <title>Busqueda</title>
</head>
<body>

<div class="container-fluid" style="height: 100vh;">
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">
            <div class="col-sm-6 col-lg-5 border border-primary">
                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">

    <div class="login__container">
    <div align="center">Hoy es;
  <?php echo $fecha=date('d/m/Y');?>
</div>
       <div align="center">
          <h2 class="login__title">Consultar Usuario <span></span></h2>
       </div>
        <div align="center">
        <form action="buscar_user2.php" method="post"> 
          <select name="usuario" title="Informacion de Usuario">
        <?php 
        //Seleccion del usuario para la busqueda//
        include('../include/conexionBD.php');
        $sql=mysqli_query($link, "SELECT * FROM registro") or die(mysqli_error($link));
        $i=0;
        while($row = mysqli_fetch_row($sql)){
          echo '<option value="'.$row[2].'">'.$row[1].'</option>';
          ;$i++;
        }
        ?> 
        </select>
        <br><br>
        <?php
        //Numero de usuarios//
        include('../include/conexionBD.php');
        $sql2 = mysqli_query($link, "SELECT * FROM registro") or die(mysqli_error($link));
        $result = ($sql2);
        $numero = mysqli_num_rows($result);
        echo 'El numero de usuario registrado es: '.$numero.'';
        ?><br><br>  
            
            <input class="btn__submit" type="submit" value="Buscar">
            <input class="btn__submit" type="button" onClick="window.location='consultar_user_bd.php'" value="Consultar Todos">
             <input class="btn__submit" type="button" onClick="window.location='inicio.php'" value="Cancelar">
        </form>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>