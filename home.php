<?php 
include_once ('models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    $sesion->redirect();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<title>Santa Comandas</title>

<?php include("includes/header.php");?>
    <?php include("includes/nav.php");?>
    
    <?php // require_once("controllers/ListadoProductoController.php"); ?>
   

    <section class=textoenmedio>
        <h1 >Bienvenido <?php   echo  $_SESSION['user']; ?></h1> 
        <?php
date_default_timezone_set("America/Montevideo");
$DateAndTime = date('m-d-Y h:i:s a', time());  
echo "<p>Hoy es $DateAndTime.<p>";
?>
    </section>
    <?php include("includes/footer.php"); ?>