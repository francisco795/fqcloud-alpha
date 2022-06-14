<?php
session_start();
include 'conexion.php';
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
    header("location:index.php");
}

$id = $_GET['id'];
$m = "SELECT * FROM users_disponibles WHERE id = '$id'";
$modificar = $conexion->query($m);
$dato = $modificar->fetch_array();

if(isset($_POST['modificar'])){
    
    $id = $_POST['id'];
    //escapes special characters in a string for use in an SQL query (evita inyeccion sql)
    $correo = $conexion->real_escape_string($_POST['mCorreo']);
    $userred = $conexion->real_escape_string($_POST['mUserred']);
    $passred = $conexion->real_escape_string( $_POST['mPassred']);
    $passGoogle = $conexion->real_escape_string( $_POST['mPassGoogle']);

    //Query to edit
    $updt = "UPDATE users SET correo = '$correo', userred = '$userred', passred = '$passred', idanydesk ='$idanydesk',
    passGoogle = '$passGoogle', WHERE id = '$id'";
    
    $updated = $conexion->query($updt);
    header("location:index.php");
    ?>
    <script>
        alert("Registro modificado");
    </script>
    <?php

}
?>
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
        <h1 class="text-center"><font COLOR ="white">FQControl©</font></h1>
        <a href="cerrar.php"><b>Cerrar sesión</b></a>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="disponibles.php" class="nav-item"><b>Usuarios disponibles</b></a>
            </li>
            <li class="nav-item">
                <a href="alta.php" clas="nav-item"><b>Registro de usuarios</b></a>
            </li>
        </ul>
    </div>
    <h2><font COLOR ="white">Editar datos</font></h2>
    <div class="container">
        <a href="disponibles.php">Volver</a>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="row">
                <!-- The ID Input is hide-->
                <input type="hidden" name="id" value="<?php echo $dato['id']; ?>">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mCorreo" value="<?php echo $dato['correo'];?>" placeholder="Correo">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mUserred" value="<?php echo $dato['userred'];?>" placeholder="UserRed">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPassred" value="<?php echo $dato['passred'];?>" placeholder="PassRed">
            </div>
            <div class="row">
                <input type="text" class="form-control" name="mPassGoogle" value="<?php echo $dato['passGoogle'];?>" placeholder="PassGoogle">
            </div>
            <div class="row">
                <input type="submit" class="btn btn-success btn-sm btn-block" name="modificar" value="Modificar">
            </div>
        </form>
    
    </div>