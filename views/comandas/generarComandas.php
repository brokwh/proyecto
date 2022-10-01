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
<?php include("../../includes/header.php");?>
    <?php include("../../includes/nav.php");?>

    <?php 
    require_once("../../controllers/generarComandasController.php");
    echo "
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/comandas/generarComandas.php' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th></th>
            <th class='text-end'> <a class='btn btn-light btn-info' role='button' href='../views/agregarProducto.php'>Filtrar</a> </th>
     
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizProductos == true){
        foreach($matrizProductos as $productos){
        
            echo "<tr>";
            echo "<td>". $productos['id']. "</td>";
            echo "<td>". $productos['nombre']. "</td>";
            echo "<td>". $productos['tipo']. "</td>";
            echo "<td>". $productos['precio']. "</td>";

            echo "<td> <button type='submit' class='btn btn-primary' name='agregarB' id='agregarB' value=". $productos['id']. "> Agregar </button> </td>";
            echo "<td> <button type='button' data-toggle='modal' data-target='#productoDetalle". $productos['id']."' class='btn btn-secondary' name='detallesB' id='detallesB' value=". $productos['id'].  "> Detalles </button> </td>";


            echo "<td> <button type='button' data-toggle='modal' data-target='#productoDetalle". $productos['id']."' class='btn btn-secondary' name='detallesB' id='detallesB' value=". $productos['id'].  "> Detalles </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarB' id='eliminarB' value=". $productos['id']. "> Eliminar </button> </td>";
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Detalles</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                    
                        <form class='form-inline' action='' method='post'>
                        <div class='form-group'>
                    
                        <textarea class='form-control' id='detalles' name='detalles' rows='3'></textarea>
                    </div>
                    <br>
                        <button href='' type='submit' class='btn btn-primary' name = 'detallesBConfirmar' value=". $productos['id'].">Guardar cambios</button>
                    </div>
                    </form>
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

    //////////

    echo "
    <p>Total producutos:</p>
    <form action='' method='post'>
    <TABLE class='table table-sm table-dark'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th></th>
            <th class='text-end'>
             <input type='submit' class='btn btn-primary' name='enviarB' id='enviarB'>
             <input class='form-control-sm col-sm-1' type='number' name='mesaInput' id='mesaInput' required>
            </th>
            
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizProductos == true){
        foreach($matrizProductos as $productos){
        
            echo "<tr>";
            echo "<td>". $productos['id']. "</td>";
            echo "<td>". $productos['nombre']. "</td>";
            echo "<td>". $productos['tipo']. "</td>";
            echo "<td>". $productos['precio']. "</td>";
            echo "<td> <button type='submit' class='btn btn-primary' name='eliminarB' id='eliminarB' value=". $productos['id']. "> Eliminar </button> </td>";
            echo "<td> <button type='button' data-toggle='modal' data-target='#productoDetalle". $productos['id']."' class='btn btn-secondary' name='detallesB' id='detallesB' value=". $productos['id'].  "> Detalles </button> </td>";

            //modal//
                echo "<div class='modal fade' id='productoDetalle". $productos['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Detalles</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                    
                        <form class='form-inline' action='' method='post'>
                        <div class='form-group'>
                    
                        <textarea class='form-control' id='detalles' name='detalles' rows='3'></textarea>
                    </div>
                    <br>
                        <button href='' type='submit' class='btn btn-primary' name = 'detallesBConfirmar' value=". $productos['id'].">Guardar cambios</button>
                    </div>
                    </form>
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