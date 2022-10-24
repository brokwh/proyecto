<style>
.textoenmedio{
    margin-left:40%;
    margin-right:40%;
      color:#DEE4FF ;
      text-align:center ;
      font-size: 30px;
      text-shadow: 2px 2px 0 #000000, 2px -2px 0 #000000, -2px 2px 0 #000000, -2px -2px 0 #000000, 2px 0px 0 #000000, 0px 2px 0 #000000, -2px 0px 0 #000000, 0px -2px 0 #000000;
      box-shadow: 3px 4px 0px 0px black;
      background:red;
      background-color:red;
      border-radius:5px;
      border:1px solid darkred;
     font-size: 30px;   
  }
  </style>
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
        $correoForm = $_POST['email'];
        
        if($usuario->validarUsuario($cargoForm, $passForm, $pinForm, $correoForm)){
                    
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
        echo "<h1 class='textoenmedio'>datos incorrectos</h1>";
    }
        
    }else{
        include_once('views/login.php');
    }
?>