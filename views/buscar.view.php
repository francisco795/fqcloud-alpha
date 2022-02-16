<?php
//include 'views/contenido.view.php';
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
                <a href="disponibles.php" class="nav-item">Usuarios disponibles</a>
            </li>
            <li class="nav-item">
                <a href="alta.php" clas="nav-item">Registro de usuarios</a>
            </li>
        </ul>
    </div>
    <form action="" method="POST">
        <input type="text" name="busqueda">
        <input type="submit" name="enviar" value="buscar_nombre" placeholder="Buscar">
    </form>
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
                    <td class="text-center">Usuario de Drive</td>
                    <td class="text-center">Contraseña de Drive</td>
                    <td class="text-center">Contraseña de Correo</td>
                    <td class="text-center">Skype</td>
                    <td class="text-center">Contraseña de Skype</td>
                    
                </tr>
                <?php
                if(isset($_POST['enviar'])){
                    $busqueda = $_POST['busqueda'];
                    $sql = $conexion->query("SELECT * FROM users WHERE nombre LIKE '%busqueda%'");
                   // $resultado = mysqli_query($conexion,$sql);

                    while($row = $sql->fetch_array()){
                        echo $row['nombre']. '<br/>';
                    }
                }?>
            </table>
</body>
