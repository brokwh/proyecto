<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
<?php
    include("../includes/nav.php");
    include("../controllers/ListadoProductoController.php");
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
</body>
</html>
