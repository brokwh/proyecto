<?php

require_once("../models/Menu.php");
$menu = new Menu();
$matrizMenu = $menu->getMenu();


    if(isset($_POST['eliminarB'])){//eliminar producto

        $menu->eliminarMenu($_POST['eliminarB']);
        header("Location:http://localhost/proyecto/views/menuView.php?eliminar=1");
        }

    if(isset($_POST['editBConfirmar'])){//editar producto
        $archivo = $_FILES["imagenMenu"]["tmp_name"]; 
        $tamanio = $_FILES["imagenMenu"]["size"];
        $tipo    = $_FILES["imagenMenu"]["type"];
        $nombre  = $_FILES["imagenMenu"]["name"];
        $nombreMenu = $_POST['nombreMenu'];
       
        if (empty($archivo)){
            $contenido = "0";
            }else{
            $fp = fopen($archivo, "rb");
            $contenido = fread($fp, $tamanio);
            $contenido = addslashes($contenido);
            fclose($fp);
            }
echo $nombreMenu;
        $menu->editarMenu($nombreMenu, $contenido, $_POST['editBConfirmar']);
        
        
        header("Location:http://localhost/proyecto/views/menuView.php?modificar=1");
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