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
    
    <title>Agregar Metodo Pago</title>

    <?php include("../includes/nav.php");?>
    <?php require_once("../controllers/agregarMetodoPago.php"); ?>
<?php include("../includes/header.php"); ?>

<div class="contenedor1 container justify-content-center h-100 text-center">
        <br>  
        <h2>Agregar Metodo Pago</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation">
                    <div class="form-outline mb-4">
                        <label>Nombre</label>
                        <input type="text" class="form-control"  id="nombre" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Tipo de metodo</label>
                        <select class="form-control" id="tipo" name="tipo" required >
                        <option disabled selected value>Elija tipo de Metodo de Pago</option>
                        <option>Tarjeta</option>
                        <option>Otro</option>
                                  
                        </select>            
                    </div>       <br>          
                    <div class="checkbox">                       
                        <button type="submit" name='agregarMetodoPagoB' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Agregar</button>
            </form>
                    </div>
         </div>




<?php include("../includes/footer.php"); ?>
