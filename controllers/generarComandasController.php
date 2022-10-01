<?php

require_once("../../models/Producto.php");
require_once("../../models/Comanda.php");
$productos = new Producto();
$comandas = new Comanda();
$matrizProductos = $productos->getProductos();

    if(isset($_POST['enviarB'])){//agregar producto a la comanda
     
        $comandas->generarComanda($_POST['mesaInput']);
        header("Location:http://localhost/proyecto/views/comandas/generarComandas.php");
    }
    if(isset($_POST['agregarB'])){//agregar producto a la comanda

            
        
        //$productos->eliminarProducto($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/comandas/generarComandas.php");
        }

    if(isset($_POST['editBConfirmar'])){//agregar detalles al producto

       
      

        $nombre = $_POST['nombreEditProducto'];
        $tipo = $_POST['tipoEditProducto'];
        $precio = $_POST['precioEditProducto'];
        
        $productos->editarProducto($nombre, $tipo, $precio, $_POST['editBConfirmar']);
        header("Location:http://localhost/proyecto/views/productoView.php");
        }
        
        
?>