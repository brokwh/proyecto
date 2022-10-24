<?php 
include_once ('../models/UsuarioSession.php');
$sesion = new UsuarioSession;
if ($_SESSION['user'] == ''){   
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>orden</title>

<?php 

require_once("../controllers/ListadoOrdenMesaController.php");?>
    <?php include("../includes/nav.php");?>
    <?php include("../includes/header.php");
    echo "<div class='contenedor1 container justify-content-center h-100 text-center'>
    <form action='http://localhost/proyecto/views/ordenView.php' method='post'>";
        if($_POST['idMesa'] == true){
        foreach($matrizMesaOrden as $matrizOrden){
        if($_POST['idMesa']==$matrizOrden['numeroMesa']){
            echo "<h1>Id Orden: ".$matrizOrden['0']."</h1>";
            echo "<h1>Productos: </h1>";
            echo "<h1>Precio Total: ".$matrizOrden['precioTotal']."</h1>";
            echo "<h1>Fecha y Hora de la orden:".$matrizOrden['fechaHora']."</h1>";
            echo "<h1>Id mesa:".$matrizOrden['id']."</h1>";
            echo "<h1>Estado mesa:".$matrizOrden['estadoMesa']."</h1>";
        }
        }
        } else {
            echo "<h1>No hay orden</h1>"; 
        }

  // include('ProductoEditModal.php');


       // echo $editProductoModal;
       // echo $_POST['editarB'];
       // echo $_POST['eliminarB'];
    ?></div>
</div>

        

    <?php include("../includes/footer.php"); ?>