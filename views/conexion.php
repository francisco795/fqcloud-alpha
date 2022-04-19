<?php

$host = "localhost";
$user = "root";
$clave = "";
$bd  = "fqc";

$conexion = new mysqli($host,$user,$clave,$bd);

if(!$conexion){
    echo "Algo salió mal...";
    die("Timed out: " . mysqli_connect_error());
}else{
    echo "Conexión exitosa";
}


?>