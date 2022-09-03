<?php 
require_once("../proyecto-main/models/Usuario.php");
$productos = new Usuario();
session_start();

if(isset($_POST['registroB'])){
    echo "asd";
    $tipo = $_POST['cargoRegistro'];
    $pwd = $_POST['pwdRegistro'];
    $pin = $_POST['pinRegistro'];
    $productos->agregarUsuario($tipo, $pwd, $pin);
    header("Location:http://localhost/proyecto-main/index.php");
} 

?>