<?php

require_once("../models/Categoria.php");
$categoria = new Categoria();
$matrizCategoria = $categoria->getCategoria();


    if(isset($_POST['eliminarbB'])){//eliminar producto

       $id = $_POST['eliminarbB'];
        
        $categoria->eliminarCategoria($id);
        header("Location:http://localhost/proyecto/views/categoriaView.php?eliminar=1");
        }

    if(isset($_POST['editbBConfirmar'])){//editar producto

       echo $nombre = $_POST['nombre'];
    
        $categoria->editarCategoria($nombre, $_POST['editbBConfirmar']);
       header("Location:http://localhost/proyecto/views/categoriaView.php?modificar=1");
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