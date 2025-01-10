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
    
    <title>Agregar menu</title>

    <?php include("../includes/nav.php");?>
    <?php require_once("../controllers/agregarMenu.php"); ?>
<?php include("../includes/header.php"); ?>

<div class="contenedor1 container justify-content-center h-100 text-center">
        <br>  
        <h2>Agregar Menu</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation" enctype="multipart/form-data">
            
                    <div class="form-outline mb-4">
                        <label>Nombre</label>
                        <input type="text" class="form-control"  id="nombreMenu" name="nombreMenu" placeholder="Ingrese Nombre del menu" >
                    </div>
                    <div class="form-outline mb-4">
                        <label for="">Imagen</label>
                        <input type="file" class="form-control text-left" id="imagenMenu" name="imagenMenu" multiple>
                    </div>
                    <br>                 
                    <div class="checkbox">                       
                        <button type="submit" name='agregarMenuB' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Agregar</button>
            </form>
                    </div>
         </div>




<?php include("../includes/footer.php"); ?>
