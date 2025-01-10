<?php 
require_once("../models/Reserva.php");
$reserva = new Reserva();

if(isset($_POST['agregarReservaB'])){
    $cedula = $_POST['cedula'];
    $telefonoCliente = $_POST['telefonoCliente'];
    $fechaHora = $_POST['fechaHora'];

    $reserva->agregarReserva($cedula,$telefonoCliente,$fechaHora);
    header("Location:http://localhost/proyecto/views/reservaView.php?ok=1");
}
   

?>