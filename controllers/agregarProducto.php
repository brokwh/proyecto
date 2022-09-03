<?php 
require_once("../models/Producto.php");
$productos = new Producto();


if(isset($_POST['agregarProductoB'])){//eliminar producto

    $nombre = $_POST['nombreProducto'];
    $tipo = $_POST['tipoProducto'];
    $precio = $_POST['precioProducto'];
    $productos->agregarProducto($nombre, $tipo, $precio);
    header("Location:http://localhost/proyecto-main/views/productoView.php");
}
   

?>