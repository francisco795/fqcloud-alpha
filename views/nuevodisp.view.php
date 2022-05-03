<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" type="text/css"  href="estilos2.css">
    <title>Registra un usuario</title>
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
                <a href="contenido.php" clas="nav-item">Usuarios activos</a>
            </li>
        </ul>
    </div>
    <form action="nuevodisp.php" method="POST">
        <a href="disponibles.php">Volver</a>
        <h2>Agrega un nuevo usuario disponible</h2>
        <input type="text" placeholder="&#128231; Correo"name="correo">
        <input type="text" placeholder="&#128100; UserRed"name="userred">
        <input type="text" placeholder="&#128273; PassRed"name="passred">
        <input type="text" placeholder="&#128273; PassCorreo"name="passcorreo">

        <input type="submit" value="Agregar" name="btnagregar">

    </form>
</body>
</html>