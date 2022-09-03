<?php
//include_once('models/db.php');
include_once ('models/Usuario.php');
include_once ('models/UsuarioSession.php');




if(isset($_SESSION['usuario'])){
echo "hay session";


}else if(isset($_POST['cargo']) && isset($_POST['pwd'])){
    
    $cargoForm = $_POST['cargo'];
    $passForm = $_POST['pwd'];
    $pinForm = $_POST['pin'];
    $usuario = new Usuario();
    if($usuario->validarUsuario($cargoForm, $passForm, $pinForm)){
        session_start();

        $sesion = new UsuarioSession;      
        $sesion->setCurrentUser($cargoForm);
        $usuario->setUser($sesion->getCurrentUser());
       
       if($usuario->getNombre() == "Administrador"){
        header("Location:http://localhost/proyecto-main/home.php");
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
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once ('views/login.php');
    }
}else{
    include_once ('views/login.php');
}





?>