<?php 
require_once("../models/Menu.php");
$menu = new Menu();


if(isset($_POST['agregarMenuB'])){
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

    $menu->agregarMenu($nombreMenu,$contenido);
    header("Location:http://localhost/proyecto/views/menuView.php?ok=1");
}
   

?>