<?php session_start();
error_reporting(0);
if(isset($_SESSION['usuario'])){
    require 'views/alta.view.php';  //require evita el acceso directo por enlace 
}else{
    header('Location:login.php');
}
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$area = $_POST['area'];
$userred = $_POST['userred'];
$passred = $_POST['passred'];
$idanydesk = $_POST['idanydesk'];
$passanydesk = $_POST['passanydesk'];
$userGoogle = $_POST['userGoogle'];
$passGoogle = $_POST['passGoogle'];
$userMicrosoft = $_POST['userMicrosoft'];
$passMicrosoft = $_POST['passMicrosoft'];
$useriCloud = $_POST['useriCloud'];
$passiCloud = $_POST['passiCloud'];
$piniPhone = $_POST['piniPhone'];

if(isset($_POST["btnagregar"])){
    $entry = "INSERT INTO users(nombre,correo,area,userred,passred,idanydesk,passanydesk,userGoogle,passGoogle,userMicrosoft,passMicrosoft,useriCloud,passiCloud,piniPhone)VALUES('$nombre','$correo','$area','$userred','$passred','$idanydesk','$passanydesk','$userGoogle','$passGoogle','$userMicrosoft','$passMicrosoft','$useriCloud','$passiCloud','$piniPhone')";
    
    if(mysqli_query($conexion,$entry)){

        echo "<script> alert('Usuario registrado con éxito'); window.location='contenido.php'</script>";
    }else{
        echo "Error: ".$sql. "<br>".mysqli_error($conexion);
    }
}
?>