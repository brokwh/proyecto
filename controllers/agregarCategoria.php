<?php 
require_once("../models/Categoria.php");
$categoria = new Categoria();

if(isset($_POST['agregarCategoriaB'])){
  
    $nombre = $_POST['nombre'];

    $categoria->agregarCategoria($nombre);
    header("Location:http://localhost/proyecto/views/categoriaView.php?ok=1");
}
   

?>