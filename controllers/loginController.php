<?php
include_once ('models/Usuario.php');
include_once ('models/UsuarioSession.php');
$sesion = new UsuarioSession;  
$usuario = new Usuario;
//include_once('views/login.php');


  


    if (isset($_POST['ingresar'])){

        $cargoForm = $_POST['cargo'];
        $passForm = $_POST['pwd'];
        $pinForm = $_POST['pin'];

    if(empty($_POST['cargo'])){

       
            
    }else{
        if($usuario->validarUsuario($cargoForm, $passForm, $pinForm)){
                    
            $sesion->setCurrentUser($cargoForm);
            $usuario->setUser($sesion->getCurrentUser());
            
        
            if($usuario->getNombre() == "Administrador"){       
                header("Location:http://localhost/proyecto-main/home.php");
            }
            if($usuario->getNombre() == "Gerente"){
                //header("Location:http://localhost/proyecto-main/home.php");
            }
            if($usuario->getNombre() == "Mozo"){
                echo "posi gay";
                //header("Location:http://localhost/proyecto-main/home.php");
            }
            if($usuario->getNombre() == "Delivery"){
                //header("Location:http://localhost/proyecto-main/home.php");
            }
            if($usuario->getNombre() == "Cocina"){
                //header("Location:http://localhost/proyecto-main/home.php");
            }
            if($usuario->getNombre() == "Caja"){
                //header("Location:http://localhost/proyecto-main/home.php");
            }
        
    }
    }    
    }else{
        include_once('views/login.php');
    }
?>