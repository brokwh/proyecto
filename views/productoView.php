<!DOCTYPE html>
<html lang="es">
<head>
<title>Santa Comandas</title>
<?php include("../includes/header.php");?>
    <?php include("../includes/nav.php");?>


    <?php 
    require_once("../controllers/ListadoProductoController.php");
    echo "
    <form action='' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th></th>
            
        
        </tr>";
        foreach($matrizProductos as $productos){
        
            echo "<tr>";
            echo "<td>". $productos['id']. "</td>";
            echo "<td>". $productos['nombre']. "</td>";
            echo "<td>". $productos['tipo']. "</td>";
            echo "<td>". $productos['precio']. "</td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarB' id='eliminarB' value=". $productos['id']. "> Eliminar </button> </td>";
            echo "</tr>";
            echo "</form>";
        }
    echo "</TABLE>
    </form>"
    ?>
<?php include("../includes/footer.php"); ?>