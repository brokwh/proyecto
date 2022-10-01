<?php

require_once("../../models/Comanda.php");
$comandas = new Comanda();
$matrizComandas = $comandas->getComandas();
        
        
?>