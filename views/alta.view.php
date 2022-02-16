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
<title>Registra un usuario</title>
<meta name="keywords" content="Estambres, Tejidos">
</head>
<body>
    <div class="contenedor">
        <h1 class="text-center">Registra un FQCito!</h1>
        <a href="cerrar.php">Cerrar sesión</a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="contenido.php" class="nav-item">Consulta de usuarios</a>
            </li>
            <li class="nav-item">
                <a href="alta.php" clas="nav-item">Registro de usuarios</a>
            </li>
            <li class="nav-item">
                <a href="buscar.php" class="nav-item">Busquemos un usuario</a>
            </li>
        </ul>
    </div>
    <div class="container-alta">
        <h4 class="text-center">Registrando un nuevo usuario</h4>
        
        <form action="/alta.php" method="POST" class="formulario" name="alta">

            <div class="form-group">
                <input type="text" name="nombre" placeholder="Nombre y Apellido" class="form-control" required>
            </div>
        
            
            <div class="form-group">
                <input type="text" name="correo" placeholder="Correo" class="form-control" required>
            </div>

            
            <div class="form-group">
                <input type="text" name="area" placeholder="Area" class="form-control" required>
            </div>

            
            <div class="form-group">
                <input type="text" name="userred" placeholder="Usuario en red" class="form-control" required>
            </div>

            
            <div class="form-group">
                <input type="text" name="idanydesk" placeholder="idAnydesk" class="form-control" required>
            </div>

                <?php if(!empty($errores)) : ?>
                    <div class="error">
                        <ul>
                            <?php echo $errores; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            <button class="submit" action="alta.php">Guardar</button>
        </form>
    </div>
</div>
