<?php 
include_once ('../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../../index.php");
}
require_once("../controllers/ListadoProductosOrdenController.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title></title>
<?php include("../includes/header.php");?>
<section class='contenedortabla'>
<?php echo "<div class='modal-header'>
                   <h5 class='modal-title' id='exampleModalLongTitle'>Productos de la orden numero:". $orden."  </h5>
                   <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                   </button>
               </div>";?>
<TABLE class='table'>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Tipo</th> 
            <th>Cantidad</th>    
        </tr>
        <tbody id='myTable'>
<?php
if($matrizProductosOrden == true){
        foreach($matrizProductosOrden as $productos){
        
            echo "<tr>";
            
            echo "<td><img src = 'data:image/jpg;base64," . base64_encode($productos['imagen']) . "' width = '50px' height = '50px'/></td>";
            echo "<td>". $productos['nombre']. "</td>";
            echo "<td>". $productos['tipo']. "</td>";
            echo "<td>". $productos['cantidad']. "</td>";
        }           
}         
?> 
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>           
</html>