<!DOCTYPE html>
<html lang="es">
<head>
<title>Lista usuarios</title>
<?php include("includes/header.php");?>
</head>
<body>
<?php include("includes/nav.php") ?>

<body>


  
  
<?php 

    include("db.php"); 
    $query = "SELECT * FROM crud";
    $resultado = mysqli_query($conn, $query);

?>

<table class="table">

    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>

        </tr>
    </thead>

    <?php

      while ($row = mysqli_fetch_array($resultado)) {

    ?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nombre'] ?></td>
        <td><?php echo $row['apellidos'] ?></td>
    </tr>



<?php } ?>
</table>



<!-- final body -->
<?php include("includes/footer.php"); ?>    

  