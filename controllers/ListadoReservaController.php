<?php

require_once("../models/Reserva.php");
$reserva = new Reserva();
$matrizReserva = $reserva->getReserva();


    if(isset($_POST['eliminarB'])){//eliminar producto

            
        
        $reserva->eliminarReserva($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/reservaView.php?eliminar=1");
        }

    if(isset($_POST['editBConfirmar'])){//editar producto

        $cedula = $_POST['cedulaEdit'];
        $telefonoCliente = $_POST['telefonoClienteEdit'];
        $fechaHora = $_POST['fechaHoraEdit'];
        
        $reserva->editarReserva($cedula, $telefonoCliente, $fechaHora, $_POST['editBConfirmar']);
        header("Location:http://localhost/proyecto/views/reservaView.php?modificar=1");
        }
        
        
//require_once("views/Productos/view.php");



    //if(isset($_POST['eliminarB'])){

        
        //$resultado = new AlumnoModel();
//$resultado->eliminarAlumno($_POST['eliminarB']);

      //  }

  
//echo $_POST['eliminarB'];
//se almacena lo recibido de la base de datos en un array o cualquier cosa y en base
//a eso se procesa lo obtenido o no, esto sirve para poder filtrar lo obtenido d eun listado por ejemplo
?>