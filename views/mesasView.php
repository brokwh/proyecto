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
<title>Mesas</title>
<?php include("../includes/header.php");
require_once("../controllers/ListadoMesasController.php");?>
    <?php include("../includes/nav.php");?>

    <?php 
    
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/mesasView.php' method='post'>
    <TABLE class='table'>
        <tr>
            <th>id</th>
            <th>Estado de la Mesa</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/agregarMesa.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizMesa == true){
        foreach($matrizMesa as $mesas){
        
            echo "<tr>";
            echo "<td>" .$mesas['id']. "</td>";
            echo "<td>" .$mesas['estadoMesa']. "</td>";
            echo "<td></td>";
            echo"<td></td>
            <td></td>";
    

            echo "<td> <button type='button' data-toggle='modal' data-target='#usuarioEdit". $mesas['id']."' class='btn btn-secondary' name='editarB' id='editarB' value=". $mesas['id'].  "> Editar </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarB' id='eliminarB' value=". $mesas['id']. "> Eliminar </button> </td>";
            //modal//
                echo "<div class='modal fade' id='usuarioEdit". $mesas['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar usuario</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                   
                    <form class='form-inline' action='' method='post'>
                    <div class='form-group'>
                    
                    <label>Cargo</label>
                    <select class='form-control' id='estadoMesa' name='estadoMesa' >
                        <option disabled selected value>". $mesas['estadoMesa']."</option>
                        <option>Libre</option>
                        <option>Ocupada</option>
                        <option>A ser atendida</option> 
                                      
                        
                        </select>           
                </div>
                
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editBConfirmar' value=". $mesas['id'].">Confirmar</button>
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