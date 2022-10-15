<!DOCTYPE html>
<html lang="es">
<head>
<title>Borrar</title>
<?php include("includes/header.php");?>

<style>
</style>
</head>
<body>
<?php include("includes/nav.php") ?>
<?php 

    include("db.php"); 
    $query = "SELECT * FROM crud";
    $resultado = mysqli_query($conn, $query);

?>
<form action="" method="post">
<table class="table">

    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Borrar</th>

        </tr>
    </thead>

    <?php

      while ($row = mysqli_fetch_array($resultado)) {

    ?>

    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nombre'] ?></td>
        <td><?php echo $row['apellidos'] ?></td>
        <td><input class="form-check-input" type="checkbox" value="<?php echo $row['id']?>" name="checkbox[]"></td>
    </tr>



<?php }?>
</table>

<div class="d-flex justify-content-center justify-content-around text-center">
<button type="submit" class="btn btn-lg btn-outline-dark btn-block" name="borrarT">Borrar Todo</button>
<button type="submit" class="btn btn-lg btn-outline-dark btn-block" name="borrarS">Borrar Seleccionado</button>
</div>
</form>
<?php 

if(isset($_POST['borrarS']))
{
    $all_id = $_POST['checkbox'];
    $extract_id = implode(',' , $all_id);

    $query1 = "DELETE FROM crud WHERE id IN($extract_id) ";
    $query1_run = mysqli_query($conn, $query1);

    if($query1_run)
    {
        $_SESSION['status'] = "Multiple Data Deleted Successfully";
        header("Location: borrar.php");
    }
    else
    {
        $_SESSION['status'] = "Multiple Data Not Deleted";
        header("Location: borrar.php");
    }
}
if(isset($_POST['borrarT'])){

    $query2 = "DELETE FROM crud";
    $query2_run = mysqli_query($conn, $query2);
    header("Location: borrar.php");
}
?>

<!-- final body -->
<?php include("includes/footer.php"); ?>