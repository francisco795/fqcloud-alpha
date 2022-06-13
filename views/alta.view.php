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
    <form action="alta.php" method="POST">
        <h2>Registra un FQCito/a</h2>
        <input type="text" placeholder="&#128100; Nombre"name="nombre">
        <input type="text" placeholder="&#128231; Correo"name="correo">
        <input type="text" placeholder="&#128101; Área"name="area">
        <input type="text" placeholder="&#128100; Usuario en Red"name="userred">
        <input type="text" placeholder="&#128273; Password en red"name="passred">
        <input type="text" placeholder="&#128100; ID de Anydesk"name="idanydesk">
        <input type="text" placeholder="&#128273; Password de Anydesk"name="passanydesk">
        <input type="text" placeholder="&#128100; Usuario de Google"name="userGoogle">
        <input type="text" placeholder="&#128273; Password de Google"name="passGoogle">
        <input type="text" placeholder="&#128100; Usuario de Microsoft"name="userMicrosoft">
        <input type="text" placeholder="&#128273; Password de Microsoft"name="passMicrosoft">
        <input type="text" placeholder="&#128100; Usuario de iCloud"name="useriCloud">
        <input type="text" placeholder="&#128273; Password de iCloud"name="passiCloud">
        <input type="text" placeholder="&#128241; Pin de iPhone"name="piniphone">
        <input type="submit" value="Agregar" name="btnagregar">

    </form>
</body>
</html>