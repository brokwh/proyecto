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
<title>Reserva</title> 
<?php require_once("../controllers/ListadoReservaController.php"); 
include("../includes/header.php");?>
    <?php include("../includes/nav.php");?>

    <?php 
    if(isset($_GET['ok']) && $_GET['ok'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-success alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha agregado su <strong>reserva.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['eliminar']) && $_GET['eliminar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-danger alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha eliminado su <strong>reserva.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['modificar']) && $_GET['modificar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-warning alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha modificado su <strong>reserva.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
   
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/reservaView.php' method='post' novalidate>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Cedula</th>
            <th>Telefono Cliente</th>
            <th>fecha y Hora de Reserva</th>
            <th>Estado</th>
            <th></th>
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/agregarReserva.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizReserva == true){
        foreach($matrizReserva as $reserva){
      
            echo "<tr>";
            echo "<td>". $reserva['id']. "</td>";
            echo "<td>". $reserva['cedula']. "</td>";
            echo "<td>". $reserva['telefonoCliente']. "</td>";
            echo "<td>". $reserva['fechaHora']. "</td>";
            echo "<td>". $reserva['estado']. "</td>";

            echo "<td> <button type='button' data-toggle='modal' data-target='#reservaEdit". $reserva['id']."' class='btn btn-secondary' name='editarB' id='editarB' value=". $reserva['id'].  "> Editar </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarB' id='eliminarB' value=". $reserva['id']. "> Eliminar </button> </td>";
            //modal//
                echo "<div class='modal fade' id='reservaEdit". $reserva['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar Reserva</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                    
                    <form class='form-inline' action='' method='post'>
                    <div class='form-group'>
                    <label for='text'>Cedula:</label>
                    <input type='number' max='99999999' class='form-control' id='cedulaEdit' name='cedulaEdit' value='". $reserva['cedula']."' >
                    </div>
                    
                    <div class='form-group'>
                    <label for='text'>Telefono Cliente:</label>
                    <input type='number' max='99999999' class='form-control' id='telefonoClienteEdit' name='telefonoClienteEdit' value='". $reserva['telefonoCliente']."' >
                    </div>
                    
                <div class='form-group'>
                    <label for='text'>Fecha y Hora:</label>
                    <input type='datetime-local' class='form-control' id='fechaHoraEdit' name='fechaHoraEdit' value='". $reserva['fechaHora']."'>
                    </div>
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editBConfirmar' value=". $reserva['id'].">Confirmar</button>
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