<?php

require_once("../models/Usuario.php");
$usuarios = new Usuario();
$matrizUsuarios = $usuarios->getUsuarios();


    if(isset($_POST['eliminarB'])){//eliminar producto

            
        
        $usuarios->eliminarUsuario($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/usuariosView.php");
        }

    if(isset($_POST['editBConfirmar'])){//editar producto

       
      

        $tipo = $_POST['cargoRegistro'];
        $pass = $_POST['pwdEdit'];
        $pin = $_POST['pinEdit'];
        
        $usuarios->editarUsuario($tipo, $pass, $pin, $_POST['editBConfirmar']);
        header("Location:http://localhost/proyecto/views/usuariosView.php");
        }
        
        