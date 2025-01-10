<?php 
require_once("../models/MetodoPago.php");
$metodoPago = new MetodoPago();

if(isset($_POST['agregarMetodoPagoB'])){
  
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $metodoPago->agregarMetodoPago($nombre,$tipo);
    header("Location:http://localhost/proyecto/views/metodoPagoView.php?ok=1");
}
?>