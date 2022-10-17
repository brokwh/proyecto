<?php 

require_once("../models/Usuario.php");
$usuarios = new Usuario();

if(isset($_POST['registroB'])){
    $correo = $_POST['correo'];
    $tipo = $_POST['cargoRegistro'];
    $pwd =  $_POST['pwdRegistro'] ; 
    $usuarios->agregarUsuario($correo, $tipo, $pwd);
    header("Location:http://localhost/proyecto/views/usuariosView.php"); 
  
   if(empty($_POST['pwdRegistro'])){
    $pwd = "NULL";
    $usuarios->agregarUsuario($correo, $tipo, $pwd);
    header("Location:http://localhost/proyecto/views/usuariosView.php"); 

   } 

    //$usuarios->agregarUsuario($tipo, $pwd, $pin);
    //header("Location:http://localhost/proyecto/index.php");
}  

?>