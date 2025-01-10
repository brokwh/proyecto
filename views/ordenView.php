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
    </div>

<?php 

?>

</div>
    <?php include("../includes/header.php");?>
    <?php
        if($matrizMesa == true){
        foreach($matrizMesa as $mesas){
            echo "<div class='contenedor2'><form style='display: inline-block;' action='http://localhost/proyecto/views/ordenMesaView.php' method='post' onsubmit='redirect();return false;'>";
            echo "<h1 class='textoOrden'></h1> <a class='contenedorMesa'><input style='max-width:300px;' type='image' name='mesa' border='0' alt='Submit' src='http://localhost/proyecto/includes/imagenes/mesa.png'/><h1 class='texto-encima' id='idMesa' name='idMesa'>" .$mesas['id']. "</h1></a><br>";
           if($mesas['estadoMesa'] == "Libre" ){   
            echo "<br><span class='mesaLibre'>" .$mesas['estadoMesa']. "</span>";
        }  elseif($mesas['estadoMesa'] == "Ocupada" ){   
            echo "<br><span class='mesaOcupada'>" .$mesas['estadoMesa']. "</span>";}
            elseif($mesas['estadoMesa'] == 'A ser atendida' ){   
                echo "<br><span class='mesaAseratendida'>" .$mesas['estadoMesa']. "</span>";}
            elseif($mesas['estadoMesa'] == 'Reservada' ){   
                echo "<br><span class='mesaAseratendida'>" .$mesas['estadoMesa']. "</span>";}
             echo "<input type='hidden' id='estadoMesa' name='estadoMesa' value=".$mesas['estadoMesa'].">";
             echo "<input type='hidden' id='idMesa' name='idMesa' value=".$mesas['id']."></div></form>
           </div></form>";
        }  
    } else {
            echo "<h1>No hay mesas</h1>"; 
        }
    

  // include('ProductoEditModal.php');


       // echo $editProductoModal;
       // echo $_POST['editarB'];
       // echo $_POST['eliminarB'];
    ?>    



 
<script type='text/javascript'>


    /*window.addEventListener('click', function (e){
        var fired_button = $("button").val(); 
        console.log(`x: ${ e.x }`);
        document.getElementById('x-value').textContent = e.x;
        document.getElementById('y-value').textContent = e.y;
        document.getElementById('x-value').textContent = e.x, fired_button;
        //location=`http://localhost/proyecto/views/ordenView.php?x=${ e.x }&y=${ e.y }`;
    }); 
*/
    
</script>  

    <?php include("../includes/footer.php"); ?>