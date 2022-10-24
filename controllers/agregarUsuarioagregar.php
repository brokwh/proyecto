<?php 

require_once("../models/Usuario.php");
$usuarios = new Usuario();

if(isset($_POST['registroB'])){
    $correo = $_POST['email'];
    $pin = $_POST['pin'];
    $tipo = $_POST['cargoRegistro'];
    $pwd =  $_POST['pwd'] ; 
    echo $pin;
     
     if($pwd==null){
      $pass='NULL';
      $usuarios->agregarUsuario($tipo, $pwd ,$pin, $correo);
      header("Location:http://localhost/proyecto/views/usuariosView.php"); 
       }
       elseif($pin==$pin){
      $pin='NULL';
    $usuarios->agregarUsuario($tipo, $pwd, $pin, $correo);
     header("Location:http://localhost/proyecto/views/usuariosView.php"); 
     }
    //$usuarios->agregarUsuario($tipo, $pwd, $pin);
    //header("Location:http://localhost/proyecto/index.php");
}  


  /* if(empty($_POST['pwdRegistro'])){

    $pwd = "NULL";
    $pin = $_POST['pinRegistro']; 
    $usuarios->agregarUsuario($tipo, $pwd, $pin);
    header("Location:http://localhost/proyecto/index.php"); 
*/