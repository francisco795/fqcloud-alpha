<?php session_start();
error_reporting(0);
require 'views/conexion.php';
require 'views/buscar.view.php';

$buscar_nombre = $_POST['buscar_nombre'];

mysqli_select_db($conexion,$bd) or die ("Algo nos salió mal :(");

?>

