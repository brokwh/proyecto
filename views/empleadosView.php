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
<title>Usuarios</title>
<?php require_once("../controllers/ListadoUsuariosController.php");
include("../includes/nav.php");
include("../includes/header.php");

?>

    <?php 
    
    if(isset($_GET['ok']) && $_GET['ok'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-success alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha agregado su <strong>usuario.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['eliminar']) && $_GET['eliminar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-danger alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha eliminado su <strong>usuario.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
       if(isset($_GET['modificar']) && $_GET['modificar'] == 1){ 
        ?>
        <div id='alerts' class="alert alert-warning alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha modificado su <strong>usuario.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
     </button>
      </div><?php
       }
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='https://urubit.uy/proyecto/views/usuariosView.php' method='post'>
    <TABLE class='table'>
        <tr>
            <th>correo</th>
            <th>Tipo</th>
            <th>Contraseña</th>
            <th>Pin</th>
            <th>estadoRecuperar</th>
            <th></th>
            <th></th>
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/altaUsuario.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizUsuariosEmpleados == true){
        foreach($matrizUsuariosEmpleados as $usuarios){
        
            echo "<tr>";
            echo "<td>". $usuarios['email']. "</td>";
            echo "<td>". $usuarios['tipo']. "</td>";
            echo "<td>". $usuarios['pass']. "</td>";
            echo "<td>". $usuarios['pin']. "</td>";
            echo "<td>";
           if($usuarios['estadoRecuperar']==1){ 
               echo"<p class=' alert alert-danger'>Solicita cambio de contraseña</p>";
            }
            elseif($usuarios['estadoRecuperar']==0){ 
                echo"<p class='alert alert-success'>usuario OK</p>";
             }
            echo "</td>";
            echo"<td></td>";
    

            echo "<td> <button type='button' data-toggle='modal' data-target='#usuarioEdit". $usuarios['id']."' class='btn btn-secondary' name='editarB' id='editarB' value=". $usuarios['id'].  "> Editar </button> </td>";
            echo "<td> <button type='submit' class='btn btn-danger' name='eliminarB' id='eliminarB' value=". $usuarios['id']. "> Eliminar </button> </td>";
            //modal//
                echo "<div class='modal fade' id='usuarioEdit". $usuarios['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Editar usuario</h5>
                    <form class='form-inline' action='' method='post'>
                    <button type='button' class='btn close' data-dismiss='modal' aria-label='Close' >
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                   
                    
                    <div class='form-group'>
                    <label for='text'>Email</label>
                    <input type='text' class='form-control' id='email' name='email' value='". $usuarios['email']."' required>
                    </div>
                    <div class='form-group'>
                    <label>Cargo</label>
                    <select class='form-control' id='cargoRegistro". $usuarios['id']."' name='cargoRegistro' onclick='habilitar". $usuarios['id']."(this)' onchange='habilitar". $usuarios['id']."(this)'>
                        <option>". $usuarios['tipo']."</option>
                        <option>Administrador</option>
                        <option>Gerente</option>
                         <option>Mozo</option> 
                        <option>Cocina</option>
                        <option>Caja</option>                  
                        
                        </select> 
                        <br>          
                </div>
                <div class='form-outline mb-4 d-none' id='pinDiv". $usuarios['id']."'>
                <label>PIN</label>
                <input type='password' class='form-control'  id='pin' name='pinEdit' placeholder='Ingrese PIN' >
                </div>
                <div class='form-outline mb-4 d-none' id='pwdDiv". $usuarios['id']."'>
                    <label for='text'>pass:</label>
                    <input type='password' class='form-control' id='pwdEdit' name='pwdEdit'>
                    </div>
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editBConfirmar' value=". $usuarios['id'].">Confirmar</button>
                    </div>
                    </form>
                    <script>
                    function habilitar". $usuarios['id']."(answer){
                        console.log(answer.value);
                        if (answer.value=='Mozo'||answer.value=='Caja'||answer.value=='Cocina'){
                            document.getElementById('pwdDiv". $usuarios['id']."').classList.add('d-none');
                            document.getElementById('pinDiv". $usuarios['id']."').classList.remove('d-none');
                            
                            
                        }   
                        if (answer.value=='Gerente'||answer.value=='Administrador'){
                            document.getElementById('pinDiv". $usuarios['id']."').classList.add('d-none');
                            document.getElementById('pwdDiv". $usuarios['id']."').classList.remove('d-none');
                            
                        }
                 
                    };
                    </script>
                    ";
            echo"
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

    <?php include("../includes/footer.php"); ?>
