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
    
    <title>Agregar reserva</title>

    <?php include("../includes/nav.php");?>
    <?php require_once("../controllers/agregarReserva.php"); ?>
<?php include("../includes/header.php"); ?>

<div class="contenedor1 container justify-content-center h-100 text-center">
        <br>  
        <h2>Agregar Reserva</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation">
            <div class="form-outline mb-4">
                        <label>Cedula</label>
                        <input  max='999999999'type="number" class="form-control"  id="cedula" name="cedula" placeholder="Ingrese Cedula" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label>Telefono Cliente</label>
                        <input max='99999999'type="number" class="form-control"  id="telefonoCliente" name="telefonoCliente" placeholder="Ingrese Telefono Cliente"required >
                    </div>
                    <div class="form-outline mb-4">
                        <label>Fecha y Hora</label>
                        <input type="datetime-local" class="form-control"  id="fechaHora" name="fechaHora" required>
                    </div>
                    <br>                 
                    <div class="checkbox">                       
                        <button type="submit" name='agregarReservaB' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Agregar</button>
            </form>
                    </div>
         </div>




<?php include("../includes/footer.php"); ?>
