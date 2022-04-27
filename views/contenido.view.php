
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/estilos1.css" rel="stylesheet"/>
    <title>FQControl Online</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center"><font COLOR ="black">FQControl!</font></h1>
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
    <h2><font COLOR ="black">Busca un usuario</font></h2>
    <form action="contenido.php" method="POST">
        <input type="text" name="buscar">
        <input type="submit" value="Buscar">
    </form>

    <h2><font COLOR="black">Usuarios activos</font></h2>
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
        <td><a href="editar.php?id=<?php echo $show['id'];?>">Editar</a> -<a href="#">Borrar</a></td>
    </tr>


    <?php }
    ?>
    </table>
</body>
</html>