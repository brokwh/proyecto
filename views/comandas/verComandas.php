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
<title>Ver Comandas</title>
<?php ?>
<style>
    tr.hide-table-padding td {
  padding: 0;
}

.expand-button {
	position: relative;
}

.accordion-toggle .expand-button:after
{
  position: absolute;
  left:.75rem;
  top: 50%;
  transform: translate(0, -50%);
  content: '-';
}
.accordion-toggle.collapsed .expand-button:after
{
  content: '+';
}
</style>
    <?php include("../../includes/nav.php");?>

    <?php 
    require_once("../../controllers/verComandasController.php");
    include("../../includes/header.php");
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='' method='post'>
    <TABLE class='table'>
        <tr>
            <th><i class='bi bi-braces'></th>
            <th>ID</th>
            <th>Precio</th>
            <th>Fecha-Hora</th>
            <th>Mesa</th>
            <th>Estado Orden</th>

          
            <th class='text-end'> <a class='btn btn-light btn-info' role='button' href='../views/agregarProducto.php'>Filtrar</a> </th>
     
       
        <tbody id='myTable'>"
        ;
        if($matrizComandas == true){
        foreach($matrizComandas as $comandas){
        
            echo "<tr href='http://localhost/proyecto/views/productosOrden.php?orden=". $comandas['id']. "' class='accordion-toggle collapsed' name='ordenRow' id='". $comandas['id']."'  data-toggle='modal' data-target='#ProductosOrden". $comandas['id']."' ";
            echo "<td></td>";
            echo "<td><i class='bi bi-box-arrow-in-up-right'></td>";
            echo "<td>". $comandas['id']. "</td>";
            echo "<td>". $comandas['precioTotal']. "</td>";
            echo "<td>". $comandas['fechaHora']. " 9:01</td>";
            echo "<td>". $comandas['numeroMesa']. "</td>";
            echo "<td>". $comandas['estadoOrden']. "</td>
            <input type='hidden' id='numeroMesa' name='numeroMesa' value=". $comandas['numeroMesa']. ">";
            echo "<td> <button type='submit' class='btn btn-primary' name='entregadoB' id='entregadoB' value=". $comandas['id']. "> Entregado </button> </td>";


          //modal productos//
          echo "<div class='modal fade' id='ProductosOrden". $comandas['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
          <div class='modal-dialog modal-dialog-centered' role='document'>
          <div class='modal-content'>
              <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLongTitle'>Productos de la orden numero:". $comandas['id']."  </h5>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                  </button>
              </div>
              <div class='modal-body'>


              </div>
          </div>
      
      </div>";
    //
   

      
            echo "</tr>";
            echo "</form>";
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
    echo "</TABLE>";

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
