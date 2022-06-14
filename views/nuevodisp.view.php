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
                <a href="disponibles.php" class="nav-item"><b>Usuarios disponibles</b></a>
            </li>
            <li class="nav-item">
                <a href="contenido.php" clas="nav-item"><b>Usuarios activos</b></a>
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