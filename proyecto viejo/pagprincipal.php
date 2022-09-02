<!DOCTYPE html>
<html lang="es">
<head>
<title>Alta Usuario</title>
<?php include("includes/header.php");?>
<link href="includes/ingreso.css" rel="stylesheet">
</head>
<body>
<?php include("includes/nav.php") ?>
<div class="body">
<form class="form-signin text-center" action="añadir2.php" method="post">
      <img class="img-rounded mb-4" src="includes/imagenes/logo.jpeg" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Alta usuario</h1>
      <label for="inputNombre" class="sr-only" required>Nombre</label>
      <input type="text" id="inputNombre" class="form-control" placeholder="Nombre"  minlength="3" maxlength="16" pattern="[A-Za-z]"  name="inputNombre" required autofocus>
      <label for="inputApellidos" class="sr-only" minlength="3" maxlength="32" required>Apellidos</label>
      <input type="text" id="inputApellidos" class="form-control" placeholder="Apellidos" minlength="3" maxlength="16" pattern="[A-Za-z]" name="inputApellidos" required>
      <br>
      <button class="btn btn-lg btn-outline-dark btn-block" type="submit" name="submit">Añadir</button>
      <button class="btn btn-lg btn-outline-dark btn-block" type="reset">Limpiar</button>
    </form>
</div>    
<!-- final body -->
<?php include("includes/footer.php"); ?>