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
<title>Ver Comandas Cocina</title>

    <?php include("../includes/nav.php");?>

    <?php 
    require_once("../controllers/verComandasCocinaController.php");
    include("../includes/header.php");
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/cocinaView.php' method='post'>
    <TABLE class='table'>
        <tr>
        <th><i class='bi bi-braces'></th>
            <th>ID</th>
            <th>Fecha-Hora</th>
            <th>Mesa</th>
            <th>Estado Orden</th>
            <th></th>
            <th class='text-end'> <a class='btn btn-light btn-info' role='button' href='../views/comandas/generarComandas.php>Filtrar</a> </th>
     
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizComandas == true){
        foreach($matrizComandas as $comandas){
        
            echo "<tr href='http://localhost/proyecto/views/productosOrden.php?orden=". $comandas['id']. "' class='accordion-toggle collapsed' name='ordenRow' id='". $comandas['id']."'  data-toggle='modal' data-target='#ProductosOrden". $comandas['id']."' >";
            echo "<td><i class='bi bi-box-arrow-in-up-right'></i>";
            echo "<td>". $comandas['id']. "</td>";
            echo "<td>". $comandas['fechaHora']. "</td>";
            echo "<td>". $comandas['numeroMesa']. "</td>";
            echo "<td>". $comandas['estadoOrden']. "</td>";
            

            echo "<td> <button type='button' data-toggle='modal' data-target='#productoDetalle". $comandas['id']."' class='btn btn-secondary' name='detallesB' id='detallesB' value=". $comandas['id'].  "> Detalles </button> </td>";
            echo "<td> <button type='submit' class='btn btn-dark' name='encolaB' id='encolaB' value=". $comandas['id']. "> En Cola </button> </td>";
            echo "<td> <button type='submit' class='btn btn-warning' name='preparandoB' id='preparandoB' value=". $comandas['id']. "> Preparando </button> </td>";
            echo "<td> <button type='submit' class='btn btn-success' name='hechoB' id='hechoB' value=". $comandas['id']. ">Hecho </button> </td>";
            //modal//
                echo "<div class='modal fade' id='productoDetalle". $comandas['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
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
                        <button href='' type='submit' class='btn btn-primary' name = 'detallesBConfirmar' value=". $comandas['id'].">Guardar cambios</button>
                    </div>
                    </form>
                    </div>
                </div>
            
            </div>";
          //

           //modal productos//
           echo "<div class='modal fade' id='ProductosOrden". $comandas['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
           <div class='modal-dialog modal-dialog-centered' role='document'>
         
          
           <div class='modal-content'>
               
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


<?php include("../includes/footer.php"); ?>