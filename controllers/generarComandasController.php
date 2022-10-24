<?php

require_once("../../models/Producto.php");
require_once("../../models/Comanda.php");
$productos = new Producto();
$comandas = new Comanda();
$matrizProductos = $productos->getProductos(); 


   



    if(isset($_POST['enviarB'])){
    
        $mesa = $_POST['mesaInput'];
       

        if(!empty($_POST['lang'])) {
            
            $lista = [];
            $orden = $comandas->generarComanda($mesa);
            foreach($_POST['lang'] as $value){
                echo "asd";
                $comandas->agregarComanda($value, $orden);
                header('Location:http://localhost/proyecto/views/comandas/enviarComandas.php');
            }
        }

    }


    
?>