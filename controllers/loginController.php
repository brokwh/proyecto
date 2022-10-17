<?php
include_once ('models/Usuario.php');
include_once ('models/UsuarioSession.php');
$sesion = new UsuarioSession;  
$usuario = new Usuario;
//include_once('views/login.php');


  


    if (isset($_POST['ingresar'])){

        $correo = $_POST['correo'];
        $pass = $_POST['pwd'];
        $cargoForm= $_POST['cargoRegistro'];

    if(empty($_POST['correo'])){
    
    }else{
        
        if($usuario->validarUsuario($correo, $pass)){
                    
            $sesion->setCurrentUser($cargoForm);
            $usuario->setUser($sesion->getCurrentUser());
            
        
            if($usuario->getNombre() == "Administrador"){       
                header("Location:http://localhost/proyecto/home.php");
            }
            if($usuario->getNombre() == "Gerente"){
                header("Location:http://localhost/proyecto/home.php");
            }
            if($usuario->getNombre() == "Mozo"){
                header("Location:http://localhost/proyecto/home.php");
            }
            if($usuario->getNombre() == "Delivery"){
                header("Location:http://localhost/proyecto/home.php");
            }
            if($usuario->getNombre() == "Cocina"){
                header("Location:http://localhost/proyecto/home.php");
            }
            if($usuario->getNombre() == "Caja"){
                header("Location:http://localhost/proyecto/home.php");
            }
        
    }else{
        include_once('views/login.php');
    }
    }   
    }else{
        include_once('views/login.php');
    }
?>