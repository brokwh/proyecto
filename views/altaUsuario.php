<?php 
include_once ('../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../index.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Agregar usuarios</title>

    <?php include("../includes/nav.php");?>
    <?php require_once("../controllers/agregarUsuario.php"); ?>
<?php include("../includes/header.php");?>

<div class="contenedor1 container justify-content-center h-100 text-center">
        <br>  
        <h2>Alta Usuarios</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation" novalidate>
                    <div class="form-outline mb-4">
                        <label>correo</label>
                        <input type="text" class="form-control"  id="correo" name="correo" placeholder="Ingrese nombre" >
                    </div>

                    <div class="form-group">
                        <label>tipo</label>
                        <select class="form-control" id="cargoRegistro" name="cargoRegistro" onchange="habilitarPWD(this) || habilitarPIN(this)">
                        <option disabled selected value>Elija su cargo</option>
                        <option>Administrador</option>
                        <option>Gerente</option>
                         <option>Mozo</option> 
                        <option>Cocina</option>
                        <option>Caja</option>                  
                        
                        </select>            
                    </div>
                    <br>
                    <div class="form-outline mb-4 " id="pwdDiv">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control" id="pwdRegistro" name="pwdRegistro" placeholder="Ingrese contraseña" required>              

                    </div>   
            
                    <br>                 
                    <div class="checkbox">                       
                        <button type="submit" name='registroB' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Agregar</button>
            </form>
                    </div>
         </div>

         <script>

            function Toggle() {
                var temp = document.getElementById("pin");
                var tempp = document.getElementById("pwd");
                    if (temp.type === "password") {
                        temp.type = "text";
                    }
                    else {
                        temp.type = "password";
                    }
                    if (tempp.type === "password") {
                            tempp.type = "text";
                        }
                        else {
                            tempp.type = "password";
                    }
            } ; 
                                   
                
            
        </script>



<?php include("../includes/footer.php"); ?>
