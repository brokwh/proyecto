<?php 
require_once("../proyecto/models/Usuario.php");
$productos = new Usuario();

if(isset($_POST['registroB'])){
    echo "asd";
    $tipo = $_POST['cargoRegistro'];
    $pwd = $_POST['pwdRegistro'];
    $pin = $_POST['pinRegistro'];
    $productos->agregarUsuario($tipo, $pwd, $pin);
    header("Location:http://localhost/proyecto/index.php");
} 

?>