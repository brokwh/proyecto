<!DOCTYPE html>
<html lang="es">
<head>
<title>Alta Usuario</title>
<?php include("includes/header.php");?>
<link href="includes/ingreso.css" rel="stylesheet">
</head>
<body>
<?php include("includes/nav.php") ?>

<?php

  include('db.php');
  if(isset($_POST['submit'])){
    $cargo = $_POST['cargo'];
    $pwd = $_POST['inputPwd'];
    $pin = $_POST['inputPin'];
    $query = "INSERT INTO usuario(tipo, pass, pin) VALUES ('$cargo', '$pwd', '$pin')";
    $resultado = mysqli_query($conn, $query);
  }
    if(!$resultado){
        die("Query Failded");
    }
echo "Ingresado correctamente";
mysqli_close($conn);
?> 
   
<!-- final body -->
<?php include("includes/footer.php"); ?>