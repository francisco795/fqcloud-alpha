<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bacaf2f5fc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos1.css">
    <title>FQControl!®</title>
</head>
<body>
    
    <div class="contenedor">
    <h1 class="titulo">FQControl Online!</h1>
    <hr class="border">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="POST" class="formulario" name="login">
        <div class="form-group">
            <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Correo FQC">
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="POST" class="formulario" name="login">
        <div class="form-group">
            <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
            <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
        </div>
        <?php if(!empty($errores)): ?>
            <div class="error">
                <ul>
                    <?php echo $errores; ?>
                </ul>
            </div>
        <?php endif; ?>
    </form>
    <p class="texto-registrate">
        ¿Aún no tienes cuenta?
        <a href="registro.php">Registrate!</a>
    </p>

    </div>
    </div>
</body>
</html>