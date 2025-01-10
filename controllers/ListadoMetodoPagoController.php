<?php

require_once("../models/MetodoPago.php");
$metodoPago = new MetodoPago();
$matrizMetodoPago = $metodoPago->getMetodoPago();


    if(isset($_POST['eliminarbB'])){//eliminar producto

            
        
        $metodoPago->eliminarMetodoPago($_POST['eliminarbB']);
        header("Location:http://localhost/proyecto/views/metodoPagoView.php?eliminar=1");
        }

    if(isset($_POST['editbBConfirmar'])){//editar producto

        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
    
        $metodoPago->editarMetodoPago($nombre,$tipo, $_POST['editbBConfirmar']);
       header("Location:http://localhost/proyecto/views/metodoPagoView.php?modificar=1");
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