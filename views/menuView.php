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
<title>Menu</title>
<?php include("../includes/header.php");?>
    <?php include("../includes/nav.php");?>

    <?php 
    if(isset($_GET['ok']) && $_GET['ok'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-success alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha agregado su <strong>menu.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['eliminar']) && $_GET['eliminar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-danger alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha eliminado su <strong>menu.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['modificar']) && $_GET['modificar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-warning alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha modificado su <strong>menu.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
    require_once("../controllers/ListadoMenuController.php");
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/menuView.php' method='post' enctype='multipart/form-data'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>Imagen del Menu</th>
            <th></th>
           
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/agregarMenu.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizMenu == true){
        foreach($matrizMenu as $menu){
      
            echo "<tr>";
            echo "<td>". $menu['id']. "</td>";
            echo "<td>". $menu['nombre']. "</td>";
            echo "<td><img src = 'data:image/jpg;base64," . base64_encode($menu['imagenMenu']) . "' width = '1000px' height = '500px'/></td>";
           
            echo "<div class='row w-100 align-items-center'>";
            echo "<td> <button type='button' data-toggle='modal' data-target='#menuEdit". $menu['id']."' class='btn btn-secondary' name='editarB' id='editarB' value=". $menu['id'].  "> Editar </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarB' id='eliminarB' value=". $menu['id']. "> Eliminar </button> </td>";
            echo "</div>";
            //modal//
                echo "<div class='modal fade' id='menuEdit". $menu['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar Menu</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                    
                    <form class='form-inline' action='' method='post' enctype='multipart/form-data'>
                    <div class='form-outline mb-4'>
                        <label>Nombre</label>
                        <input type='text' class='form-control'  id='nombreMenu' name='nombreMenu' placeholder='Ingrese Nombre del menu' >
                    </div>
                    <div class='form-outline mb-4'>
                        <label for=''>Imagen</label>
                        <input type='file' class='form-control text-left' id='imagenMenu' name='imagenMenu' multiple>
                    </div>
                    
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editBConfirmar' value=". $menu['id'].">Confirmar</button>
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