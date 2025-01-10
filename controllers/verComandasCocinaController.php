<?php

require_once("../models/Comanda.php");
$comandas = new Comanda();
$matrizComandas = $comandas->getComandasNoHechas();


if(isset($_GET['encola']) && $_GET['encola'] == 1){ 
    ?>
    <div id='alerts' class="alert alert-dark alert-dismissible fade show my-3 mx-2" role="alert">
    Se ha puesto en cola su <strong>orden.</strong>
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div><?php
}
if(isset($_GET['preparando']) && $_GET['preparando'] == 1){ 
    ?>
    <div id='alerts' class="alert alert-warning alert-dismissible fade show my-3 mx-2" role="alert">
    Se ha puesto a preparar su  <strong>orden.</strong>
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div><?php
}
if(isset($_GET['hecho']) && $_GET['hecho'] == 1){ 
    ?>
    <div id='alerts' class="alert alert-success alert-dismissible fade show my-3 mx-2" role="alert">
    Se ha hecho a su <strong>Orden.</strong>
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div><?php
}

if(isset($_POST['encolaB'])){
    $comandas->encolaComanda($_POST['encolaB']);
    header("Location:http://localhost/proyecto/views/cocinaView.php?encola=1");
    }
if(isset($_POST['preparandoB'])){
        $comandas->preparandoComanda($_POST['preparandoB']);
        header("Location:http://localhost/proyecto/views/cocinaView.php?preparando=1");
    }
if(isset($_POST['hechoB'])){
        $comandas->hechoComanda($_POST['hechoB']);
        header("Location:http://localhost/proyecto/views/cocinaView.php?hecho=1");
    } 

    if(isset($_POST['asd'])){
        header("Location:http://localhost/proyecto/views/cocinaView.php");
    }     
        
?>