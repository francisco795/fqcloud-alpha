<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos2.css">
<title>Inicio</title>
<meta name="keywords" content="Estambres, Tejidos">
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center">FQControl!</h1>
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
    <form action="contenido.php" method="POST">
        <input type="text" name="buscar">
        <input type="submit" value="buscar">
    </form>
    <form> 
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
                <td class="text-center">Usuario de Google</td>
                <td class="text-center">Contraseña de Google</td>
                <td class="text-center">Usuario de Microsoft</td>
                <td class="text-center">Contraseña de Microsoft</td>
                <td class="text-center">Usuario de iCloud</td>
                <td class="text-center">Contraseña de iCloud</td>
                <td class="text-center">Pin de iCloud</td>
                <td class="text-center">Opciones</td>
                
            </tr>
            <?php
            include 'buscar.php';
            include 'conexion.php';

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
                    <td class="text-center"><?php echo $show['piniCloud']?></td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>
</html>

