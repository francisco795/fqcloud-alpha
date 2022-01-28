<?php session_start();
error_reporting(0);
require 'views/conexion.php';
require 'views/alta.view.php';


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$area = $_POST['area'];
$userred = $_POST['userred'];
$idanydesk = $_POST['idanydesk'];


$sql = "INSERT INTO users VALUES(null,'$nombre','$correo','$area','$userred','$idanydesk')";
$query = mysqli_query($conexion,$sql);

if($query){
    echo "<script> alert('Correcto');
   </script>";

}else{
    echo "<script> alert('incorrecto')";
    
}

?>