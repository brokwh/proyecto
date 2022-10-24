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
    
    <title>Agregar mesa</title>

    <?php include("../includes/nav.php");?>
    <?php require_once("../controllers/agregarMesa.php"); ?>
<?php include("../includes/header.php"); ?>

<div class="contenedor1 container justify-content-center h-100 text-center">
        <br>  
        <h2>Agregar mesa</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation" novalidate>
            
                    <div class="form-group">
                        <label>Estado de la mesa</label>
                        <select class="form-control" id="estadoMesa" name="estadoMesa">
                        <option disabled selected value>Elija estado Mesa</option>
                        <option>Libre</option>
                        <option>Ocupada</option>
                        <option>A ser atendida</option>                
                        </select>            
                    </div>
                    <br>                 
                    <div class="checkbox">                       
                        <button type="submit" name='agregarMesaB' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Agregar</button>
            </form>
                    </div>
         </div>




<?php include("../includes/footer.php"); ?>
