<?php 
require_once("../controllers/recuperarPwd.php");
include_once ('../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../index.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Agregar productos</title>
<?php include("../includes/header.php");?>
    <?php include("../includes/nav.php");?>
    <?php require_once("../controllers/agregarProducto.php"); ?>
    <?php require_once("../controllers/ListadoCategoriaController.php"); ?>


<div class="contenedor1 container justify-content-center h-100 text-center">
        <br>  
        <h2>Alta productos</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation" enctype="multipart/form-data" >
                 <div class="form-outline mb-4">
                        <label for="">Imagen</label>
                        <input type="file" class="form-control-file text-left" id="imagen" name="imagen" multiple>
                    </div>        
                     <div class="form-outline mb-4">
                        <label>Nombre</label>
                        <input type="text" class="form-control"  id="nombreProducto" name="nombreProducto" placeholder="Ingrese nombre" >
                    </div>
                    
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" id="tipoProducto" name="tipoProducto">
                            <?php foreach ($matrizCategoria as $categoria) {
                            echo "<option>". $categoria['nombre']. "</option>";
                               }   ?>          
                        </select>            
                    </div>
                    <br>
                    <div class="form-outline mb-4">
                        <label>Precio</label>
                        <input type="number" class="form-control"  id="precioProducto" name="precioProducto" placeholder="Ingrese precio" >
                    </div>  
                    <div class="form-outline mb-4">
                    <p>Aptitud</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="veganoB" id="veganoB" value="Vegano">
                        <label class="form-check-label" for="inlineCheckbox1">Vegano</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="vegetarianoB" id="vegetarianoB" value="Vegetariano">
                        <label class="form-check-label" for="inlineCheckbox2">Vegetariano</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="celiacoB" id="celiacoB" value="Celiaco">
                        <label class="form-check-label" for="inlineCheckbox3">Celiaco</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="destacadoB" id="destacadoB" value="Destacado">
                        <label class="form-check-label" for="inlineCheckbox4">Destacado</label>
                    </div>
                    </div>
                    <br>                 
                    <div class="checkbox">                       
                        <button type="submit" name='agregarProductoB' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Agregar</button>
            </form>
                    </div>
         </div>




<?php include("../includes/footer.php"); ?>
