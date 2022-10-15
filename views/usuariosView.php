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
<?php include("../includes/header.php");?>
    <?php include("../includes/nav.php");?>

    <?php 
    require_once("../controllers/ListadoUsuariosController.php");
    echo "<section class='contenedortabla'><div class=''>
    <input class='form-control' id='myInput' type='search' placeholder='Buscar..'>
    <form action='http://localhost/proyecto/views/usuariosView.php' method='post'>
    <TABLE class='table'>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Contraseña</th>
            <th>PIN</th>
            <th></th>
            <th></th>
            
            <th class='text-end'> <a class='btn btn-dark btn-info' role='button' href='../views/agregarProducto.php'>Agregar</a> </th>
            
        
        </tr>
        <tbody id='myTable'>"
        ;
        if($matrizUsuarios == true){
        foreach($matrizUsuarios as $usuarios){
        
            echo "<tr>";
            echo "<td>". $usuarios['id']. "</td>";
            echo "<td>". $usuarios['tipo']. "</td>";
            echo "<td>". $usuarios['pass']. "</td>";
            echo "<td>". $usuarios['pin']. "</td>";
            //echo "<td>". $usuarios['tipo']. "</td>";
            //echo "<td>". $usuarios['precio']. "</td>";

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
                    
                    
                                <div class='modal-body mx-3'>
                                <div class='form-group'>
                                        <label>Cargo</label>
                                        <select class='form-control' id='cargoRegistro' name='cargoRegistro' onchange='habilitarPWD(this) || habilitarPIN(this)'>
                                        <option>Elija su cargo</option>
                                        <option>Mozo</option>
                                        <option>Caja</option>
                                        <option>Cocina</option>
                                        <option>Gerente</option>
                                        <option>Administrador</option>                 
                                        </select>
                                        
                                    
                                    
                                    </div>
                                    <br>

                                    <div class='form-outline mb-4  d-none' id='pinDivModal'>
                                        <label>PIN</label>
                                        <input type='password' class='form-control'  id='pinEdit' name='pinEdit' placeholder='Ingrese PIN' >
                                    </div>

                                    <div class='form-outline mb-4  d-none' id='pwdDivModal'>
                                        <label>Contraseña:</label>
                                        <input type='password' class='form-control' id='pwdEdit' name='pwdEdit' placeholder='Ingrese contraseña'>              
                                    </div>        

                                </div>
                                <div class='modal-footer d-flex justify-content-center'>
                                    <button type='submit' id='editBConfirmar' name='editBConfirmar' value=". $usuarios['id']." class='btn btn-deep-orange'>Confirmar</button>
                                </div>
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
            function habilitarPIN(answer){
                console.log(answer.value);
                if (answer.value=='Mozo'||answer.value=='Caja'||answer.value=='Cocina'){
                    document.getElementById('pinDivModal').classList.remove('d-none');
                }else{
                    
                    document.getElementById('pinDivModal').classList.add('d-none');
                }
                               
            };
            function habilitarPWD(answer){
                console.log(answer.value);
                if (answer.value=='Gerente'||answer.value=='Administrador'){
                   
                    document.getElementById('pwdDivModal').classList.remove('d-none');
                }else{
                  
                    document.getElementById('pwdDivModal').classList.add('d-none');
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

        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
    </script>            

    <?php include("../includes/footer.php"); ?>
