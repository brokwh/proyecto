<?php

require_once("../models/Comanda.php");
$pago = new Comanda();
require_once("../models/MetodoPago.php");
$MetodoPago = new MetodoPago();
$matrizMetodoPagoTarjeta=$MetodoPago->getMetodoPagoTarjeta();
$MetodoPago2 = new MetodoPago();
$matrizMetodoPagoOtro=$MetodoPago2->getMetodoPagoOtro();

if(isset($_GET['ok']) && $_GET['ok'] == 1){ 
    ?>
    <div id='alerts' class="alert alert-primary alert-dismissible fade show my-3 mx-2" role="alert">
    se pago <strong>la Orden.</strong>
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div><?php
}

if(isset($_POST['confirmarPago'])){
    $metodo=$_POST['tipoPago'];
    $tarjeta=$_POST['tarjeta'];
    $idOrden=$_POST['idOrden'];
    $mesa=$_POST['idMesa'];
    
   
    $i=0;
    if($tarjeta==null){
         $texto="pagado con $metodo";
    }
    else{
         $texto="pagado con tarjeta $tarjeta";
        
    }
       
    foreach($idOrden as $value){
        $cant=$idOrden[$i];
       $pago->pagado($texto,$cant,$mesa);
        $i++;
    }
   header("Location:http://localhost/proyecto/views/ordenMesaView.php?ok=1");
   
} 
?>