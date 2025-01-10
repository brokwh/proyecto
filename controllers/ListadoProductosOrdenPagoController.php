<?php
require_once("../models/Producto.php");
$productos = new Producto();
$matrizProductosOrden = $productos->getProductosOrden($orden);

?>