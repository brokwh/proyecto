<?php 
require_once("../models/Usuario.php");
$usuario = new Usuario();


    if (isset($_POST['recuperarB'])){
        $email = $_POST["mailRecuperar"];
        if($usuario->recuperarUsuario($email)){
            echo"<script>alert('Se ha enviado su solicitud de cambiar la contraseña');</script>";            
        }else{

            header("Location:http://localhost/proyecto/index.php");
        }

        
    }


?>