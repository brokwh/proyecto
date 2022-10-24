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
require_once("../controllers/ListadoOrdenController.php");?>
    <?php include("../includes/nav.php");?>

    <?php include("../includes/header.php");
   
        if($matrizMesa == true){
        foreach($matrizMesa as $mesas){
            echo "<div class='contenedor2'><form style='display: inline-block;' action='http://localhost/proyecto/views/ordenMesaView.php' method='post' onsubmit='redirect();return false;'>";
            echo "<h1 class='textoOrden'></h1> <a class='contenedorMesa'><input style='max-width:300px;' type='image' name='submit'border='0' alt='Submit' src='http://localhost/proyecto/includes/imagenes/mesa.png'/><h1 class='texto-encima' id='idMesa' name='idMesa'>" .$mesas['id']. "</h1></a><br>";
           if($mesas['estadoMesa'] == "Libre" ){   
            echo "<br><span class='mesaLibre'>" .$mesas['estadoMesa']. "</span>";
        }  elseif($mesas['estadoMesa'] == "Ocupada" ){   
            echo "<br><span class='mesaOcupada'>" .$mesas['estadoMesa']. "</span>";}
            elseif($mesas['estadoMesa'] == 'A ser atendida' ){   
                echo "<br><span class='mesaAseratendida'>" .$mesas['estadoMesa']. "</span>";}
            echo "<input type='hidden' id='idMesa' name='idMesa' value=".$mesas['id']."></div></form>";
        }  
    } else {
            echo "<h1>No hay mesas</h1>"; 
        }
    

  // include('ProductoEditModal.php');


       // echo $editProductoModal;
       // echo $_POST['editarB'];
       // echo $_POST['eliminarB'];
    ?>
</div>

        

    <?php include("../includes/footer.php"); ?>