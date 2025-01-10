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
<title>Categoria</title>

    <?php include("../includes/nav.php");?>

    <?php 
    if(isset($_GET['ok']) && $_GET['ok'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-success alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha agregado su <strong>categoria.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['eliminar']) && $_GET['eliminar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-danger alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha eliminado su <strong>categoria.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['modificar']) && $_GET['modificar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-warning alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha modificado su <strong>categoria.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
    require_once("../controllers/ListadoCategoriaController.php");
    include("../includes/header.php");
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/categoriaView.php' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th></th>
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/agregarCategoria.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizCategoria == true){
        foreach($matrizCategoria as $categoria){
      
            echo "<tr>";
            echo "<td>". $categoria['id']. "</td>";
            echo "<td>". $categoria['nombre']. "</td>";
            
            echo "<td> <button type='button' data-toggle='modal' data-target='#categoriaEdit". $categoria['id']."' class='btn btn-secondary' name='editarB' id='editarB' value=". $categoria['id'].  "> Editar </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarbB' id='eliminarB' value=". $categoria['id']. "> Eliminar </button> </td>";
            //modal//
                echo "<div class='modal fade' id='categoriaEdit". $categoria['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar Categoria</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                    
                    <form class='form-inline' action='' method='post'>
                    <div class='form-group'>
                    <label for='text'>nombre:</label>
                    <input type='text' class='form-control' id='nombre' name='nombre' value='". $categoria['nombre']."' required>
                    </div>
                    
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editbBConfirmar' value=". $categoria['id'].">Confirmar</button>
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