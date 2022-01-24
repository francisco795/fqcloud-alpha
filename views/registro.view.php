<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/bacaf2f5fc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/estilos1.css">
<title>Registrate ahora!</title>
</head>
<body>
    <?php
    include 'conexion.php';?>
    
    <div class="contenedor">
    <h1 class="titulo">Ingresa tu correo y contraseña del dominio FQC</h1>
    <hr class="border">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="POST" class="formulario" name="login">
        <div class="form-group">
            <i class="icono izquierda far fa-address-card"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="POST" class="formulario" name="login">
        <div class="form-group">
            <i class="icono izquierda fas fa-key"></i><input type="password" name="password" class="password" placeholder="Contraseña">
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="POST" class="formulario" name="login">
        <div class="form-group">
            <i class="icono izquierda fas fa-key"></i><input type="password" name="password2" class="password_btn" placeholder="Confirma tu contraseña">
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
        ¿Ya tienes cuenta?
        <a href="login.php">Inicia sesión</a>
    </p>

    </div>
    </div>
</body>
</html>