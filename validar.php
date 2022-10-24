<?php
include('db.php');
$cargo = $_POST['cargo'];
$pwd = $_POST['pwd'];
$PIN = $_POST['pin'];
session_start();
$consulta="SELECT * FROM usuario WHERE tipo='$cargo' and pass='$pwd' or pin='$PIN'";
$resultado=mysqli_query($conn,$consulta);
$filas = mysqli_num_rows($resultado);


if ($filas){
    header("location:pagprincipal.php");
}else{
    ?>
    <?php
        include("index.php");
    ?>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
?>