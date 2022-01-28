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
<link rel="stylesheet" type="text/css"  href="estilos2.css">
<title>Inicio</title>
<meta name="keywords" content="Estambres, Tejidos">
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center">FQControl!</h1>
        <a href="cerrar.php">Cerrar sesión</a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#" class="nav-item">Usuarios disponibles</a>
            </li>
            <li class="nav-item">
                <a href="alta.php" clas="nav-item">Registro de usuarios</a>
            </li>
        </ul>
    </div>

    <div class="contenedor2">
        <form method="POST" action="buscar.php">
            <input type="text" name="buscar_nombre" placeholder="Buscar un usuario">
            <button class="submit" action="buscar.php" name="busca">Buscar</button>
        </form>
        
        </input>
        <h2 class="text-center">Usuarios activos</h2>
        <table border="1" bgcolor="gray">
            <tr>
                <td class="text-center">id</td>
                <td class="text-center">Nombre</td>
                <td class="text-center">Correo</td>
                <td class="text-center">Área</td>
                <td class="text-center">Usuario en red</td>
                <td class="text-center">Contraseña de red</td>
                <td class="text-center">idAnydesk</td>
                <td class="text-center">Contraseña de anydesk</td>
                <td class="text-center">Contraseña de Drive</td>
                <td class="text-center">Contraseña de Correo</td>
                <td class="text-center">Skype</td>
                <td class="text-center">Contraseña de Skype</td>
                <td>Opciones</td>
            </tr>
            <?php 
            $sql = "SELECT * FROM users WHERE nombre = $buscar_nombre";
            $result = mysqli_query($conexion,$sql);

            while($show=mysqli_fetch_array($result)){


            ?>
                <tr>
                    <td class="text-center"><?php echo $show['id']?></td>
                    <td class="text-center"><?php echo $show['nombre']?></td>
                    <td class="text-center"><?php echo $show['correo']?></td>
                    <td class="text-center"><?php echo $show['area']?></td>
                    <td class="text-center"><?php echo $show['userred']?></td>
                    <td class="text-center"><?php echo $show['passred']?></td>
                    <td class="text-center"><?php echo $show['idanydesk']?></td>
                    <td class="text-center"><?php echo $show['passanydesk']?></td>
                    <td class="text-center"><?php echo $show['userdrive']?></td>
                    <td class="text-center"><?php echo $show['passdrive']?></td>
                    <td class="text-center"><?php echo $show['passcorreo']?></td>
                    <td class="text-center"><?php echo $show['skype']?></td>
                    <td class="text-center"><?php echo $show['passskype']?></td>
                    <td><a href="#">Editar</a>-<a href="#">Borrar</a></td>
                </tr>
            <?php
            } ?>
        </table>
    </div>
</body>
</html>