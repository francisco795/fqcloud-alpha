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
    <<div class="contenedor">
        <h1 class="text-center"><font COLOR ="WHITE">FQControl©</font></h1>
        <a href="cerrar.php">Cerrar sesión</a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="disponibles.php" class="nav-item">Usuarios disponibles</a>
            </li>
            <li class="nav-item">
                <a href="alta.php" clas="nav-item">Registro de usuarios</a>
            </li>
        </ul>
    </div>
    <h2><font COLOR ="WHITE">Busca un usuario</font></h2>
    <form action="contenido.php" method="POST">
        <input type="text" name="buscar">
        <input type="submit" value="Buscar">
    </form>

    <h2><font COLOR="white">Usuarios activos</font></h2>
    <table border="1" bgcolor="gray">
        <div class="container-table">
            <tr>
                <td class="text-center">id</td>
                <td class="text-center">Nombre</td>
                <td class="text-center">Correo</td>
                <td class="text-center">Área</td>
                <td class="text-center">Usurio en red</td>
                <td class="text-center">Password de red</td>
                <td class="text-center">ID Anydesk</td>
                <td class="text-center">Password de anydesk</td>
                <td class="text-center">Usuario de Google</td>
                <td class="text-center">Password de Google</td>
                <td class="text-center">Usuario en Microsoft</td>
                <td class="text-center">Contraseña de Microsoft</td>
                <td class="text-center">Usuario de iCloud</td>
                <td class="text-center">Contraseña de iCloud</td>
                <td class="text-center">Pin de iCloud</td>
                <td class="text-center">Opciones</td>
    
            </tr>
        </div>
    <?php

    include 'conexion.php';
    include 'buscar.php';
    
    while($show=mysqli_fetch_array($sql_query)){?>

    <tr>
        <td class="text-center"><?php echo $show['id']?></td>
        <td class="text-center"><?php echo $show['nombre']?></td>
        <td class="text-center"><?php echo $show['correo']?></td>
        <td class="text-center"><?php echo $show['area']?></td>
        <td class="text-center"><?php echo $show['userred']?></td>
        <td class="text-center"><?php echo $show['passred']?></td>
        <td class="text-center"><?php echo $show['idanydesk']?></td>
        <td class="text-center"><?php echo $show['passanydesk']?></td>
        <td class="text-center"><?php echo $show['userGoogle']?></td>
        <td class="text-center"><?php echo $show['passGoogle']?></td>
        <td class="text-center"><?php echo $show['userMicrosoft']?></td>
        <td class="text-center"><?php echo $show['passMicrosoft']?></td>
        <td class="text-center"><?php echo $show['useriCloud']?></td>
        <td class="text-center"><?php echo $show['passiCloud']?></td>
        <td class="text-center"><?php echo $show['piniPhone']?></td>
        <td><a href="editar.php?id=<?php echo $show['id'];?>">Editar</a> <a href="borrar.php?id=<?php echo $show['id'];?>">Borrar</a></td>
    </tr>


    <?php }
    ?>
    </table>
</body>
</html>