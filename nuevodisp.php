<?php session_start();
error_reporting(0);
if(isset($_SESSION['usuario'])){
    require 'views/nuevodisp.view.php';  //require evita el acceso directo por enlace 
}else{
    header('Location:login.php');
}
include 'conexion.php';

$correo = $_POST['correo'];
$userred = $_POST['userred'];
$passred = $_POST['passred'];
$passcorreo = $_POST['passcorreo'];


if(isset($_POST["btnagregar"])){
    $newDisp = "INSERT INTO users_disponibles(correo,userred,passred,passcorreo)VALUES('$correo','$userred','$passred','$passcorreo')";
    
    if(mysqli_query($conexion,$newDisp)){
        echo "<script> alert('Usuario registrado con éxito'); window.location='contenido.php'</script>";
        header("Location:disponibles.php");
    }else{
        echo "Error: ".$sql. "<br>".mysqli_error($conexion);
    }
}

?>
