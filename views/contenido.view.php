<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/bacaf2f5fc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/estilos2.css">
 <!--Fin de parte de Frank-->
<link rel="stylesheet" type="text/css"  href="estilos2.css">
<title>Inicio</title>
<meta name="keywords" content="Estambres, Tejidos">
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center">FQControl!</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#" class="nav-item">Consulta de usuarios</a>
            </li>
            <li class="nav-item">
                <a href="#" clas="nav-item">Registro de usuarios</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">Eliminar usuarios</a>
            </li>
        </ul>
    </div>

    <div class="contenedor2">
        <h2 class="text-center">Usuarios activos</h2>
        <table border="1" bgcolor="gray">
            <tr>
                <td class="text-center">id</td>
                <td class="text-center">Nombre</td>
                <td class="text-center">Correo</td>
                <td class="text-center">Área</td>
                <td class="text-center">Usuario en red</td>
                <td class="text-center">idAnydesk</td>
            </tr>
            <?php 
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conexion,$sql);

            while($show=mysqli_fetch_array($result)){

            ?>
                <tr>
                    <td class="text-center"><?php echo $show['id']?></td>
                    <td class="text-center"><?php echo $show['nombre']?></td>
                    <td class="text-center"><?php echo $show['correo']?></td>
                    <td class="text-center"><?php echo $show['area']?></td>
                    <td class="text-center"><?php echo $show['userred']?></td>
                    <td class="text-center"><?php echo $show['idanydesk']?></td>
                </tr>
            <?php
            } ?>
        </table>
    </div>
</body>
</html>