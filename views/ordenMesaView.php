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
<?php include("../includes/nav.php");?>
<?php 
require_once("../controllers/pagoComandaController.php");
require_once("../controllers/ListadoOrdenMesaController.php");?>
    
    <form action ="http://localhost/proyecto/views/OrdenMesaView.php"  method="post" class = "form-signin needs-validation" enctype="multipart/form-data" >
    <?php include("../includes/header.php");?>
    <?php
    $i=0;
        if($_POST['estadoMesa'] == "Ocupada"){
            $pila = array();
            echo"<input type='hidden' id='idMesa' name='idMesa' value=". $_POST['idMesa']. ">";
        foreach($matrizMesaOrden as $matrizOrden){
        if($_POST['idMesa']==$matrizOrden['numeroMesa'] && $matrizOrden['estadoOrden']=='Entregado'){
             echo "<div class=' mt-3 text-light container bg-dark table-hover position-relative mx-auto  rounded-2 border border-3 w-50 p-3'><h1>Id Orden: ".$matrizOrden['0']."</h1>";
             $orden=$matrizOrden['0'];
             include("../controllers/ListadoProductosOrdenPagoController.php");
             echo "<h4>Productos:<h1 class='fs-6'>";
             foreach($matrizProductosOrden as $productos ){
                echo "<img  class='rounded-2 border border-5 mt-3' src = 'data:image/jpg;base64," . base64_encode($productos['imagen']) . "' width = '150px' height = '150px'/>";
                echo "<h5>". $productos['cantidad']. " X ";
                echo "". $productos['nombre']. "";
                echo "  $". $productos['precio']. "</h5>";
                array_push($pila,$matrizOrden['0']);
                }
            echo "</h1><h4>Precio Total: $".$matrizOrden['precioTotal']."</h4>";
            echo "<h4>Fecha y Hora de la orden: " .$matrizOrden['fechaHora']."</h4>";
            echo "<h4>Id mesa: ".$matrizOrden['id']."</h4></div>";
            echo"<input type='hidden' id='idOrden[]' name='idOrden[]' value=". $pila[$i]. ">";
            
            $i++;
            ?>
        <div class="mt-3 container bg-dark table-hover position-relative mx-auto  rounded-2 border border-3 w-50 p-3">
            
            <div class="form-group text-light ">
                        <label>Metodo de pago</label>
                        <select class="form-control" id="tipoPago" name="tipoPago" onchange="habilitarPIN(this)">
                       
                           <?php 
                           foreach ($matrizMetodoPagoOtro as $otro) {     
                                 echo "<option>dsadas". $otro['nombre']. "</option>";
                            }?>      
                            <option>Tarjeta</option>          
                        </select>            
                    </div>

                    <div class="form-outline mb-4 d-none" id="abonadoDiv">
                       
                    </div><?php
echo"<input type='hidden' id='idMesa' name='idMesa' value=".$_POST['idMesa'].">";?>
                    <div class="form-group d-none" id="tarjetaDiv">
                        <label>Tarjeta</label>
                        <select class="form-control" id="tarjeta" name="tarjeta">
                        <option></option>
                        <?php  foreach ($matrizMetodoPagoTarjeta as $otros) {
                                 echo "<option>". $otros['nombre']. "</option>";
                         } ?>                   
                        </select>            
                    </div> <br>                  
                    
                    
                    <div class="checkbox">                       
                        <button type="submit" name='confirmarPago' class="btn  btn-dark btn-primary btn-block text-center ms-5 m-1 translate-middle">Confirmar</button>
    </form>
           <?php
        }
    elseif($matrizOrden['estadoOrden']=='Pendiente' || $matrizOrden['estadoOrden']=='En cola'|| $matrizOrden['estadoOrden']=='Preparando'){
        
        echo "<div class=' mt-3 text-light container bg-dark table-hover position-relative mx-auto  rounded-2 border border-3 w-50 p-3'>";
        echo "<h1>Orden en Cocina</h1>"; 
        echo "</div>"; 
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
<script>
                function habilitarPIN(answer){
                console.log(answer.value);
        
                if (answer.value=='Tarjeta'){
                    document.getElementById('tarjetaDiv').classList.remove('d-none');
                    document.getElementById('abonadoDiv').classList.add('d-none');
                
                  
                    
                }   
                if (answer.value=='Efectivo'){
                    document.getElementById('abonadoDiv').classList.remove('d-none');
                    document.getElementById('tarjetaDiv').classList.add('d-none');
                
                  
                    
                }  
                if (answer.value=='Mercado Pago'){
                    document.getElementById('abonadoDiv').classList.add('d-none');
                    document.getElementById('tarjetaDiv').classList.add('d-none');
                
                  
                    
                } 
            };
            </script>
        

    <?php include("../includes/footer.php"); ?>