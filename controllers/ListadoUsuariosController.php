<?php

require_once("../models/Usuario.php");
$usuarios = new Usuario();
$matrizUsuarios = $usuarios->getUsuarios();


    if(isset($_POST['eliminarB'])){//eliminar producto

            
        
        $usuarios->eliminarUsuario($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/usuariosView.php");
        }

    if(isset($_POST['editBConfirmar'])){//editar producto

       
      
        $correo = $_POST['correo'];
        $tipo = $_POST['cargoRegistro'];
        $pass = $_POST['pwdEdit'];
        $id = $_POST['editBConfirmar'] ;
        echo"$correo , $tipo ,$pass, $id";

        $usuarios->editarUsuario($correo, $tipo, $pass, $id);
    
        header("Location:http://localhost/proyecto/views/usuariosView.php");
    }
    ?>