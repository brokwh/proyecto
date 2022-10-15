<?php 
include_once ('../../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
  header("Location:../../index.php");
}
?>

<?php require_once("../../controllers/enviarComandasController.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Santa Comandas</title>

<?php include("../../includes/header.php");?>
    <?php include("../../includes/nav.php");?>
    
    <?php // require_once("controllers/ListadoProductoController.php"); ?>
    
    <section>
        <h1>Su comanda fue enviada con exito</h1> 
    </section>

    <?php include("../../includes/footer.php"); ?>