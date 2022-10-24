<?php 
include_once ('../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Productos</title>
<?php  require_once("../controllers/ListadoProductoController.php"); 
include("../includes/header.php");?>
    <?php include("../includes/nav.php");?>

    <?php 
    require_once("../controllers/ListadoProductoController.php");
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/productoView.php' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th></th>
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/agregarProducto.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizProductos == true){
        foreach($matrizProductos as $productos){
        
            echo "<tr>";
            echo "<td>". $productos['id']. "</td>";
            echo "<td>". $productos['nombre']. "</td>";
            echo "<td>". $productos['tipo']. "</td>";
            echo "<td>". $productos['precio']. "$</td>";

            echo "<td> <button type='button' data-toggle='modal' data-target='#productoEdit". $productos['id']."' class='btn btn-secondary' name='editarB' id='editarB' value=". $productos['id'].  "> Editar </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarB' id='eliminarB' value=". $productos['id']. "> Eliminar </button> </td>";
            //modal//
                echo "<div class='modal fade' id='productoEdit". $productos['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar producto</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                    
                    <form class='form-inline' action='' method='post'>
                    <div class='form-group'>
                    <label for='text'>Nombre:</label>
                    <input type='text' class='form-control' id='nombreEditProducto' name='nombreEditProducto'  value='". $productos['nombre']."'>
                    </div>
                    <div class='form-group'>
                    <label>Tipo</label>
                    <select class='form-control' id='tipoEditProducto' name='tipoEditProducto'>
                    <option disabled selected value >". $productos['tipo']."</option>
                    <option>Bebida</option>
                    <option>Plato</option>
                    <option>Postre</option>                
                    </select>            
                </div>
                <div class='form-group'>
                    <label for='text'>Precio:</label>
                    <input type='text' class='form-control' id='precioEditProducto' name='precioEditProducto' value='". $productos['precio']."'>
                    </div>
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editBConfirmar' value=". $productos['id'].">Confirmar</button>
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
    

  // include('ProductoEditModal.php');


       // echo $editProductoModal;
       // echo $_POST['editarB'];
       // echo $_POST['eliminarB'];
    ?>

</div>
</section>
    <script>
    $(document).ready(function(){// script buscador
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

<?php include("../includes/footer.php"); ?>