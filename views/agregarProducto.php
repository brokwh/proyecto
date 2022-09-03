<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Agregar productos</title>
<?php include("../includes/header.php");?>
    <?php include("../includes/nav.php");?>
    <?php require_once("../controllers/agregarProducto.php"); ?>


<div class="container justify-content-center h-100 text-center">
        <br>  
        <h2>Alta productos</h2>
        </div>
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation" novalidate>
                    <div class="form-outline mb-4">
                        <label>Nombre</label>
                        <input type="text" class="form-control"  id="nombreProducto" name="nombreProducto" placeholder="Ingrese nombre" >
                    </div>
                    
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" id="tipoProducto" name="tipoProducto">
                        <option>Bebida</option>
                        <option>Plato</option>
                        <option>Postre</option>                
                        </select>            
                    </div>

                    <div class="form-outline mb-4">
                        <label>Precio</label>
                        <input type="number" class="form-control"  id="precioProducto" name="precioProducto" placeholder="Ingrese precio" >
                    </div>
                    <br>                 
                    <div class="checkbox">                       
                        <button type="submit" name='agregarProductoB' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Agregar</button>
            </form>
                    </div>
         




<?php include("../includes/footer.php"); ?>
