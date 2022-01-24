<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}
$errores ='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    //Comienza conexión
    try{
        $conexion = New PDO('mysql:host=localhost;dbname=fqc1','root','');
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM admins WHERE usuario = :usuario AND pass = :password'); //Usuario = nombre en base de datos
    $statement->execute(array(                                                                              //Validación de datos con la base 
        ':usuario' => $usuario,
        ':password' => $password
    ));

    $resultado = $statement->fetch();
    if($resultado != false){
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    
    } else{
        $errores .= '<li>Usuario o contraseña incorrectos</li>';
    }

}

require 'views/login.view.php';

?>