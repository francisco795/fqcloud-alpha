<?php session_start();
include 'conexion.php';

if(isset($_SESSION['usuario'])){
    require 'views/borrar.view.php';  //require evita el acceso directo por enlace 
}else{
    header('Location:login.php');
}

$id = $_GET['id'];
$delete = "DELETE FROM users WHERE id = '$id'";
$deleted = $conexion->query($delete);

header("Location: contenido.php");

$conexion->close();

?>