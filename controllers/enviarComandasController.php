<?php
require_once("../../models/Producto.php");
require_once("../../models/Comanda.php");
$productos = new Producto();
$comandas = new Comanda();

$comandas->generarComanda($_GET['mesa']);



?>