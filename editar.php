<?php
session_start();
include 'conexion.php';
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
    header("location:index.php");
}

$id = $_GET['id'];
$m = "SELECT * FROM users WHERE id = '$id'";
$modificar = $conexion->query($m);
$dato = $modificar->fetch_array();
?>
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
    <h2><font COLOR ="black">Editar datos</font></h2>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <?php include 'editar.php'; ?>
            <div class="row">
                <input type="text" class="form-control" name="mNombre" value="<?php echo $dato['nombre'];?>" placeholder="Nombre">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mCorreo" value="<?php echo $dato['correo'];?>" placeholder="Correo">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mArea" value="<?php echo $dato['area'];?>" placeholder="Área">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mUserred" value="<?php echo $dato['userred'];?>" placeholder="UserRed">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPassred" value="<?php echo $dato['passred'];?>" placeholder="PassRed">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mIdanydesk" value="<?php echo $dato['idanydesk'];?>" placeholder="IDAnydesk">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPassanydesk" value="<?php echo $dato['passanydesk'];?>" placeholder="PassAnydesk">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mUserGoogle" value="<?php echo $dato['userGoogle'];?>" placeholder="UserGoogle">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPassGoogle" value="<?php echo $dato['passGoogle'];?>" placeholder="PassGoogle">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mUserMicrosofr" value="<?php echo $dato['userMicrosoft'];?>" placeholder="UseMicrosoft">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPassMicrosoft" value="<?php echo $dato['passMicrosoft'];?>" placeholder="PassMicrosoft">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mUseriCloud" value="<?php echo $dato['useriCloud'];?>" placeholder="UseriCloud">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPassiCloud" value="<?php echo $dato['passiCloud'];?>" placeholder="PassiCloud">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPiniPhone" value="<?php echo $dato['piniPhone'];?>" placeholder="piniPhone">
            </div>
            <div class="row">
                <input type="submit" class="btn btn-success btn-sm btn-block" name="modificar" value="Modificar">
            </div>
        </form>
    
    </div>