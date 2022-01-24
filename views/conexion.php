<?php

$conexion = new mysqli('127.0.0.1','root','','fqc1');

if($conexion ->connect_errno){
    die('Algo salió mal :(');
}else{
    echo 'Conexión exitosa!';
}