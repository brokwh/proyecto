<?php

require_once("../models/Mesa.php");
$mesas = new mesa();
$matrizMesa = $mesas->getMesa();


    if(isset($_POST['eliminarB'])){

            
        
        $mesas->eliminarMesa($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/mesasView.php");
        }

    if(isset($_POST['editBConfirmar'])){
        $estadoMesa=$_POST['estadoMesa'];
        $mesas->editarMesa($estadoMesa, $_POST['editBConfirmar']);
        header("Location:http://localhost/proyecto/views/mesasView.php");
       
    } 
    ?>