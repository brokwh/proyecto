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
   

    <section>
        <h1>Bienvenido <?php   echo  $_SESSION['user']; ?></h1> 
    </section>
    <?php include("includes/footer.php"); ?>