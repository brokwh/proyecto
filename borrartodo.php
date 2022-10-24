<!DOCTYPE html>
<html lang="es">
<head>
<title>CRUD</title>
<?php include("includes/header.php");?>
</head>
<body>
<?php include("includes/nav.php") ?>
<body>
<br>
<div class="d-flex justify-content-center text-center">
<form action="" method="post"></form>
    <button type="submit" class="btn btn-lg btn-outline-dark btn-block" name="borrartodo">Borrar Todo</button>
</form> 
</div>
<?php 
    if (isset($_POST['borrartodo'])){
    $query = "DROP TABLE crud";
    $query_run = mysqli_query($conn, $query);
    echo "Tabla eliminada exitosamente";
}
?>

<!-- final body -->
<?php include("includes/footer.php"); ?>

