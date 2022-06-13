<?php session_start();
if(isset($_SESSION['usuario'])){
    require 'views/tablas.view.php';  //require evita el acceso directo por enlace 
}else{
    header('Location:login.php');
}

include 'conexion.php';

