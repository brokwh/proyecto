<?php

require_once("../../models/Producto.php");
$productos = new Producto();
$matrizProductos = $productos->getProductos();


    if(isset($_POST['eliminarB'])){//eliminar producto

            
        
        $productos->eliminarProducto($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/productoView.php");
        }

    if(isset($_POST['editBConfirmar'])){//editar producto

       
      

        $nombre = $_POST['nombreEditProducto'];
        $tipo = $_POST['tipoEditProducto'];
        $precio = $_POST['precioEditProducto'];
        
        $productos->editarProducto($nombre, $tipo, $precio, $_POST['editBConfirmar']);
        header("Location:http://localhost/proyecto/views/productoView.php");
        }
        
        
?>