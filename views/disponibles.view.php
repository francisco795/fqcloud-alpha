<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilos.css">
	<title>FQControl</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center">FQControl©</h1>
        <a href="cerrar.php"><b>Cerrar sesión</b></a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="contenido.php" class="nav-item"><b>Usuarios activos</b></a>
            </li>
            <li class="nav-item">
                <a href="alta.php" clas="nav-item"><b>Registro de usuarios</b></a>
            </li>

        </ul>
    </div>
        <h2 class="text-center"><font COLOR="WHITE">Usuarios disponibles</font></h2>
        <table border="1" bgcolor="gray">
            <tr>
                <td class="text-center">id</td>
                <td class="text-center">Correo</td>
                <td class="text-center">Usuario en red</td>
                <td class="text-center">Contraseña de red</td>
                <td class="text-center">Contraseña de correo</td>
                <td class="text-center">Opciones</td>
            </tr>
            <?php 
            include 'conexion.php';
    
            $sql = "SELECT * FROM users_disponibles";
            $result = mysqli_query($conexion,$sql);

            while($show=mysqli_fetch_array($result)){

            ?>
                <tr>
                    <td class="text-center"><?php echo $show['id']?></td>
                    <td class="text-center"><?php echo $show['correo']?></td>
                    <td class="text-center"><?php echo $show['userred']?></td>
                    <td class="text-center"><?php echo $show['passred']?></td>
                    <td class="text-center"><?php echo $show['passGoogle']?></td>
                    <td><a href="editarUD.php?id=<?php echo $show['id'];?>"><font COLOR=#FF740A><b>Editar</b></a> <a href="borrarUD.php?id=<?php echo $show['id'];?>"><font COLOR=#FF740A><b>Borrar</b></a></td>
                </tr>
            <?php
            } ?>
            <a href="nuevodisp.php">Agregar nuevo usuario disponible</a>
        </table>
    </div>
</body>
</html>