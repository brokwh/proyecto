<?php 
require_once("../proyecto/models/Usuario.php");
$usuarios = new Usuario();
//echo $_POST['pinRegistro']."pin";
//echo $_POST['pwdRegistro']."pwd";
if(isset($_POST['registroB'])){
  
    $tipo = $_POST['cargoRegistro'];
    $pin = "NULL"; 
    $pwd = "'".$_POST['pwdRegistro']."'"; 
    $usuarios->agregarUsuario($tipo, $pwd, $pin);
    header("Location:http://localhost/proyecto/index.php"); 
  
   if(empty($_POST['pwdRegistro'])){

    $pwd = "NULL";
    $pin = $_POST['pinRegistro']; 
    $usuarios->agregarUsuario($tipo, $pwd, $pin);
    header("Location:http://localhost/proyecto/index.php"); 

   } 

    //$usuarios->agregarUsuario($tipo, $pwd, $pin);
    //header("Location:http://localhost/proyecto/index.php");
}  

?>