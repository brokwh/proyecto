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
<title>Metodo Pago</title>

    <?php include("../includes/nav.php");?>

    <?php 
    if(isset($_GET['ok']) && $_GET['ok'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-success alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha agregado su <strong>metodo Pago.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['eliminar']) && $_GET['eliminar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-danger alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha eliminado su <strong>metodo Pago.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['modificar']) && $_GET['modificar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-warning alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha modificado su <strong>metodo Pago.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
    require_once("../controllers/ListadoMetodoPagoController.php");
    include("../includes/header.php");
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/metodoPagoView.php' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>tipo</th>
            <th></th>
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/agregarMetodoPago.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizMetodoPago == true){
        foreach($matrizMetodoPago as $metodoPago){
      
            echo "<tr>";
            echo "<td>". $metodoPago['id']. "</td>";
            echo "<td>". $metodoPago['nombre']. "</td>";
            echo "<td>". $metodoPago['tipo']. "</td>";
            
            echo "<td> <button type='button' data-toggle='modal' data-target='#metodoPagoEdit". $metodoPago['id']."' class='btn btn-secondary' name='editarB' id='editarB' value=". $metodoPago['id'].  "> Editar </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarbB' id='eliminarB' value=". $metodoPago['id']. "> Eliminar </button> </td>";
          
            //modal//
                echo "<div class='modal fade' id='metodoPagoEdit". $metodoPago['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar MetodoPago</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                    
                    <form class='form-inline' action='' method='post'>
                    <div class='form-group'>
                    <label for='text'>nombre:</label>
                    <input type='text' class='form-control' id='nombre' name='nombre' value='". $metodoPago['nombre']."' >
                    </div>
                    <div class='form-group'>
                        <label>Tipo de metodo</label>
                        <select class='form-control' id='tipo' name='tipo' >
                        <option disabled selected value>Elija tipo de Metodo de Pago</option>
                        <option>Tarjeta</option>
                        <option>Otro</option>
                                  
                        </select>            
                    </div>  
                    
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editbBConfirmar' value=". $metodoPago['id'].">Confirmar</button>
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
    $(document).ready(function() {        
        setTimeout(function() {
          $("#alerts").hide(6000);
          }, 3000);
        });
    </script>

<?php include("../includes/footer.php"); ?>