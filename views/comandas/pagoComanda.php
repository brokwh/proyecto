<?php 
include_once ('../../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../../index.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Agregar productos</title>
<?php include("../../includes/header.php");?>
    <?php include("../../includes/nav.php");?>
    <?php// require_once("../../controllers/pagoComandaController.php"); ?>


<div class="contenedor1 container justify-content-center h-100 text-center">
        <br>  
        <h2>Registro de pago</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation" enctype="multipart/form-data" >
                          
                    <div class="form-group">
                        <label>Metodo de pago</label>
                        <select class="form-control" id="tipoProducto" name="tipoProducto" onchange="habilitarPIN(this)">
                            <option>Efectivo</option>
                            <option>Tarjeta</option>
                            <option>Mercado Pago</option>                
                        </select>            
                    </div>

                    <div class="form-outline mb-4 d-none" id="abonadoDiv">
                        <label>Abonado</label>
                        <input type="text" class="form-control"  id="abonado" name="nombreProducto" placeholder="Total Recibido" >
                    </div>

                    <div class="form-group d-none" id="tarjetaDiv">
                        <label>Tarjeta</label>
                        <select class="form-control" id="tarjeta" name="tipoProducto">
                            <option>Visa</option>
                            <option>MasterCard</option>
                            <option>Maestro</option>                
                        </select>            
                    </div> 
<br>
                    <div class="checkbox">                       
                        <button type="submit" name='confirmarPago' class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Confirmar</button>
            </form>
                    </div>
         </div>

         <script>
                function habilitarPIN(answer){
                console.log(answer.value);
        
                if (answer.value=='Tarjeta'){
                    document.getElementById('tarjetaDiv').classList.remove('d-none');
                    document.getElementById('abonadoDiv').classList.add('d-none');
                
                  
                    
                }   
                if (answer.value=='Efectivo'){
                    document.getElementById('abonadoDiv').classList.remove('d-none');
                    document.getElementById('tarjetaDiv').classList.add('d-none');
                
                  
                    
                }  
                if (answer.value=='Mercado Pago'){
                    document.getElementById('abonadoDiv').classList.add('d-none');
                    document.getElementById('tarjetaDiv').classList.add('d-none');
                
                  
                    
                } 
            };
            </script>


<?php include("../../includes/footer.php"); ?>
