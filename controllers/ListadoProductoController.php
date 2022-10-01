<?php

require_once("../models/Producto.php");
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
        
        
//require_once("views/Productos/view.php");



    //if(isset($_POST['eliminarB'])){

        
        //$resultado = new AlumnoModel();
//$resultado->eliminarAlumno($_POST['eliminarB']);

      //  }

  
//echo $_POST['eliminarB'];
//se almacena lo recibido de la base de datos en un array o cualquier cosa y en base
//a eso se procesa lo obtenido o no, esto sirve para poder filtrar lo obtenido d eun listado por ejemplo
?>