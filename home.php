<? session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Santa Comandas</title>
<?php include("includes/header.php");?>
    <?php include("includes/nav.php");?>
    
    <?php// require_once("controllers/ListadoProductoController.php"); ?>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido</h1>
    </section>
<!-- final body -->
<?php include("includes/footer.php"); ?>