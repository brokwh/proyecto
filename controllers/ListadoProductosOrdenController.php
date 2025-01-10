<?php
require_once("../models/Producto.php");
$productos = new Producto();
$orden = $_GET['orden'];
$matrizProductosOrden = $productos->getProductosOrden($orden);
?>