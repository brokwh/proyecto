<?php

require_once("../../models/Comanda.php");
$comandas = new Comanda();
$matrizComandas = $comandas->getComandas();
if(isset($_GET['eliminar']) && $_GET['eliminar'] == 1){ 
    ?>
    <div id='alerts' class="alert alert-danger alert-dismissible fade show my-3 mx-2" role="alert">
    Se ha eliminado su <strong>Orden.</strong>
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div><?php
}
if(isset($_POST['eliminarB'])){
    $comandas->eliminarComanda($_POST['eliminarB'],$_POST['numeroMesa'] );
    header("Location:http://localhost/proyecto/views/comandas/verComandasTotalesView.php?eliminar=1");
    }     
        
?>