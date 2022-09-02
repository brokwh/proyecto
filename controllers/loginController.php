<?php
include_once('models/db.php');
include_once ('models/Usuario.php');
include_once ('models/UsuarioSession.php');

$usuarioSession = new UsuarioSession();
$usuario = new Usuario();


if(isset($_SESSION['usuario'])){

    $usuario->setUser($usuarioSession->getCurrentUser());

}else if(isset($_POST['cargo']) && isset($_POST['pwd'])){
    
    $cargoForm = $_POST['cargo'];
    $passForm = $_POST['pwd'];
    $pinForm = $_POST['pin'];
    $usuario = new Usuario();
    if($usuario->validarUsuario($cargoForm, $passForm, $pinForm)){
        
        $usuarioSession->setCurrentUser($cargoForm);
        $usuario->setUser($cargoForm);
       
       if($usuario->getNombre() == "Administrador"){
        include_once("views/adminView.php");
       }
       if($usuario->getNombre() == "Gerente"){
        include_once("views/gerenteView.php");
       }
       if($usuario->getNombre() == "Mozo"){
        include_once("views/mozoView.php");
       }
       if($usuario->getNombre() == "Delivery"){
        include_once("views/deliveryView.php");
       }
       if($usuario->getNombre() == "Cocina"){
        include_once("views/cocinaView.php");
       }
       if($usuario->getNombre() == "Caja"){
        include_once("views/cajaView.php");
       }
        
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once ('views/login.php');
    }
}else{
    //echo "login";
    include_once 'views/login.php';
}





?>