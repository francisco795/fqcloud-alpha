<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos2.css">
    <title class="text-center">Usuarios disponibles</title>
    <meta name="keywords" content="Estambres, Tejidos">
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center">FQControl!</h1>
        <a href="cerrar.php">Cerrar sesión</a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="contenido.php" class="nav-item">Usuarios activos</a>
            </li>
            <li class="nav-item">
                <a href="alta.php" clas="nav-item">Registro de usuarios</a>
            </li>

        </ul>
    </div>
        <h2 class="text-center"><font COLOR="black">Usuarios disponibles</font></h2>
        <table border="1" bgcolor="gray">
            <tr>
                <td class="text-center">id</td>
                <td class="text-center">Correo</td>
                <td class="text-center">Usuario en red</td>
                <td class="text-center">Contraseña de red</td>
                <td class="text-center">Contraseña de correo</td>
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
                    <td class="text-center"><?php echo $show['passcorreo']?></td>
                </tr>
            <?php
            } ?>
        </table>
    </div>
</body>
</html>