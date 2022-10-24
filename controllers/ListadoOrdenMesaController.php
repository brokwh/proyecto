<?php

require_once("../models/OrdenMesa.php");
$Orden = new Orden();
$matrizMesaOrden = $Orden->getOrden();


    if(isset($_POST['eliminarB'])){

        $mesas->eliminarOrden($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/mesasOrdenView.php");
        }

    if(isset($_POST['editBConfirmar'])){
        $estadoMesa=$_POST['estadoMesa'];
        $mesas->editarMesa($estadoMesa, $_POST['editBConfirmar']);
        header("Location:http://localhost/proyecto/views/mesasOrdenView.php");
       
    } 
    ?>