<?php 
require_once("../models/Mesa.php");
$mesa = new Mesa();


if(isset($_POST['agregarMesaB'])){
    $estadoMesa = $_POST['estadoMesa'];
    $mesa->agregarMesa($estadoMesa);
    header("Location:http://localhost/proyecto/views/mesasView.php");
}
   

?>