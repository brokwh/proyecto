<?php 
require_once("../models/Usuario.php");
$usuario = new Usuario();


    if (isset($_POST['recuperarB'])){
        $email = $_POST["mailRecuperar"];
        if($usuario->recuperarUsuario($email)){
            echo "se envio correo";
        }else{
            echo "xd";
            echo $email;
        }

        
    }


?>