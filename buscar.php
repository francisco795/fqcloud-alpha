<?php session_start();
//error_reporting(0);
include 'conexion.php';

if(!isset($_POST['buscar'])){

    $_POST['buscar'] = "";
}


$buscar = $_POST['buscar'];

$sql_search = "SELECT * FROM users WHERE nombre LIKE '%".$buscar."%'";
$sql_query = mysqli_query($conexion,$sql_search);


?>