<?php session_start();

if(isset($_SESSION['usuario'])){   //Isset establece que la sesión está definida 
    header('Location: index.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];   

    

    $errores = ''; //Variable para mostrar errores, en caso de haberlos

    if(empty($usuario) or empty($password) or empty($password2)){   //verificar que no haya casillas vacias

        $errores .= '<li>Por favor ingresa tus datos de manera correcta.</li>';
    }else{
        try{
            $conexion = new PDO('mysql:host=127.0.0.1;dbname=fqc','root','');    //conexión con bd mediante excepciones
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM admins  WHERE usuario = :usuario LIMIT  1'); //Cosnulta preparada
        $statement->execute(array(':usuario' =>$usuario));
        $resultado = $statement->fetch();

        if($resultado != false){
            $errores .= '<li> El usuario ya exsite</li>';  

        }
    

        $password = hash('sha512',$password); //Encriptar contraseña de usuario //sha512 = criptografía diseñada para contraseña    
        $password2 = hash('sha512',$password2); 

        //echo "$usuario . $password . $password2";
    
        if($password != $password2){
            $errores .= '<li>Las contraseñas no coinciden</li>';
        }
    
    }

    if($errores == ''){
        $statement = $conexion->prepare('INSERT INTO admins (id, usuario, pass) VALUES (null,:usuario,:pass)');    //Agregando usuarios en base de datos
        $statement->execute(array(':usuario'=>$usuario, ':pass'=>$password)); 

        header('Location:login.php'); //Reedireciiona al inicio de sesion una vez registrado 
    }
}

require 'views/registro.view.php';

?>