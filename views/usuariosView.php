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
<?php include("../includes/header.php");
require_once("../controllers/ListadoUsuariosController.php");?>
    <?php include("../includes/nav.php");?>

    <?php 
    
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/usuariosView.php' method='post'>
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
        if($matrizUsuarios == true){
        foreach($matrizUsuarios as $usuarios){
        
            echo "<tr>";
            echo "<td>". $usuarios['email']. "</td>";
            echo "<td>". $usuarios['tipo']. "</td>";
            echo "<td>". $usuarios['pass']. "</td>";
            echo "<td>". $usuarios['pin']. "</td>";
            echo "<td>";
           if($usuarios['estadoRecuperar']==1){ 
               echo"<p class='solicitaCambio'>Solicita cambio de contraseña</p>";
            }
            elseif($usuarios['estadoRecuperar']==0){ 
                echo"<p class='todoOK'>usuario OK</p>";
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
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>
                    <div class='modal-body'>
                   
                    <form class='form-inline' action='' method='post'>
                    <div class='form-group'>
                    <label for='text'>Email</label>
                    <input type='text' class='form-control' id='email' name='email' value='". $usuarios['email']." required'>
                    </div>
                    <div class='form-group'>
                    <label>Cargo</label>
                    <select class='form-control' id='cargoRegistro' name='cargoRegistro' onchange='habilitar(this)'>
                        <option disabled selected value >". $usuarios['tipo']."</option>
                        <option>Administrador</option>
                        <option>Gerente</option>
                         <option>Mozo</option> 
                        <option>Cocina</option>
                        <option>Caja</option>                  
                        
                        </select> 
                        <br>          
                </div>
                <div class='form-outline mb-4 d-none' id='pinDiv'>
                <label>PIN</label>
                <input type='password' class='form-control'  id='pin' name='pinEdit' placeholder='Ingrese PIN' >
                </div>
                <div class='form-outline mb-4 d-none' id='pwdDiv'>
                    <label for='text'>pass:</label>
                    <input type='password' class='form-control' id='pwdEdit' name='pwdEdit'>
                    </div>
                    <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
                    <button href='' type='submit' class='btn btn-primary' name = 'editBConfirmar' value=". $usuarios['id'].">Confirmar</button>
                    </div>
                    </form>
                    ";?> <?php echo"
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
            function habilitar(answer){
                console.log(answer.value);
                if (answer.value=='Mozo'||answer.value=='Caja'||answer.value=='Cocina'){
                    document.getElementById('pwdDiv').classList.add('d-none');
                    document.getElementById('pinDiv').classList.remove('d-none');
                    document.getElementById('pinDivModal').classList.remove('d-none');
                    
                }   
                if (answer.value=='Gerente'||answer.value=='Administrador'){
                    document.getElementById('pinDiv').classList.add('d-none');
                    document.getElementById('pwdDiv').classList.remove('d-none');
                    document.getElementById('pwdDivModal').classList.remove('d-none');   
                }
         
            };

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
