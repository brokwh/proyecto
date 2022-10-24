<?php 
include_once ('../../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../../index.php");
}
require_once("../../controllers/generarComandasController.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Generar Comanda</title>
<?php include("../../includes/header.php");?>
    <?php include("../../includes/nav.php");?>
    <p id="valueList"></p>
    <?php 
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
           
            <th class='text-end'> <a class='btn btn-light btn-info' role='button' href='../views/agregarProducto.php'>Filtrar</a> </th>
     
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizProductos == true){
        foreach($matrizProductos as $productos){
        
            echo "<tr>
            <td>". $productos['id']. "</td>
            <td>". $productos['nombre']. "</td>
            <td>". $productos['tipo']. "</td>
            <td>$ ". $productos['precio']. "</td>";

            echo "<td>   <input type='checkbox' name='lang[]' value='".$productos['id']."'>  <br/> </td>";


                
          //
         
            
            
        }  
        }else {
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            
           
            echo "</tr>";
        }
  
    
    echo "</TABLE>
    <input type='submit' class='btn btn-primary' name='enviarB' id='enviarB'>
    <input class='form-control-sm col-sm-1' type='number' name='mesaInput' id='mesaInput' required>";
    echo "</form>";
    ?>
   

    

</div>
</section>
       <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>


<?php include("../../includes/footer.php"); ?>