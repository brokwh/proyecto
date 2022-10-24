
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Recuperar contraseña</title>
    <?php include("../includes/header.php");?>
   
    <?php include("../includes/navRecuperarPwd.php");?>
     <?php require_once("../controllers/recuperarPwd.php"); ?>
    <br>
        <div class="contenedor1 container justify-content-center h-100 text-center">
            <h2>Recuperar contraseña</h2>
        
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center">
                    

                <div class="form-outline mb-4">
                    <label>email</label>
                    <input type="email" class="form-control"  id="mailRecuperar" name="mailRecuperar" placeholder="Ingrese su email" require>
                </div>
                    <br>                 
                <div class="checkbox">                       
                    <button type="submit" name="recuperarB" id="recuperarB" class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Enviar</button>
            
                </div>
                </form>    
                        
                </div>    
        </div>             
        </div>
       
<?php include("../includes/footer.php"); ?>
