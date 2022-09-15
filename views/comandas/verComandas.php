<?php 
include_once ('../../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    $sesion->redirect();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<title>Santa Comandas</title>

<?php include("../../includes/header.php");?>
    <?php include("../../includes/nav.php");?>

    <div class="d-grid gap-2">
        <br>
        <a href="http://localhost/proyecto/views/comandas/generarComandas.php" class="btn btn-dark col-6 mx-auto" type="button">Generar comanda</a>
        <a href="http://localhost/proyecto/views/comandas/verComandas.php" class="btn btn-dark col-6 mx-auto" type="button">Ver comandas</a>
    </div>


    <?php include("../../includes/footer.php"); ?>