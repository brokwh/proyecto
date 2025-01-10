<?php 
include_once ('../../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../../index.php");
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Generar Comanda</title>
<?php ?>
    <?php include("../../includes/nav.php");?>
    <p id="valueList"></p>
    <?php
    
 require_once("../../controllers/ListadoMesasControllerComanda.php");
     require_once("../../controllers/generarComandasController.php");
     include("../../includes/header.php");
    
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th></th>
           <th></th>
           <th></th>
           <!---<th class=''> <a class='btn btn-light btn-info' role='button' href='./views/agregarProducto.php'>Filtrar</a> </th>-->
           <th>Cantidad</th> 
           <th>Precio</th>
            
            
        </tr>
        <tbody id='myTable'>";
        
        if($matrizProductos == true){
        foreach($matrizProductos as $productos){
        
            echo "<tr>
            <td>". $productos['id']. "</td>";
            echo "<td><img src = 'data:image/jpg;base64," . base64_encode($productos['imagen']) . "' width = '50px' height = '50px'/></td>";
            echo "
      
            <td>". $productos['nombre']. "</td>
            <td>". $productos['tipo']. "</td>
            <td></td>
            <td></td>
            <td></td>";
              echo "<td><input type='number' name='cantidad[]'  class='form-control' /></td>";
              echo "<input type='hidden' id='idProductos[]' name='idProductos[]' value=". $productos['id']. ">";
              echo "<input type='hidden' id='productos[]' name='productos[]' value=". $productos['nombre']. ">";
              echo "<input type='hidden' id='precio[]' name='precio[]' value=". $productos['precio']. ">";
              echo "<td> $ ". $productos['precio']. " </td>";
              /*echo "<td>   <input type='checkbox' name='lang[]' value='".$productos['id']."'>  <br/> </td>";*/
          
            
            
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
    <h1>Mesa:</h1><input type='submit' class='btn btn-primary' name='enviarB' id='enviarB'>
    <select class='form-control-sm col-sm-1' id='mesaInput' name='mesaInput' required>
      <option disabled selected value>Elija Mesa</option>
      ";
      
      foreach ($matrizMesa as $mesa) {
        echo "<option>". $mesa['id']. "</option>";
      
    }
      echo "                
    </select>
    
    ";
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
    $(document).ready(function() {        
        setTimeout(function() {
          $("#alerts").hide(6000);
          }, 3000);
        });

    </script>


<?php include("../../includes/footer.php"); ?>