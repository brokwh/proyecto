<?php
require_once("models/Menu.php");
$menu = new Menu();
$matrizMenu = $menu->getMenu();
require_once("models/Producto.php");
$productos = new Producto();
$matrizProductosDestacados = $productos->getProductosDestacados();
$productos2 = new Producto();
$matrizProductosCeliacos = $productos2->getProductosCeliacos();
$productos3 = new Producto();
$matrizProductosVeganos = $productos3->getProductosVeganos();
$productos4 = new Producto();
$matrizProductosVegetarianos = $productos4->getProductosVegetarianos();
?>