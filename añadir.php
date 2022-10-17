<!DOCTYPE html>
<html lang="es">
<head>
<title>Alta Usuario</title>
<?php include("includes/header.php");?>
<link href="includes/ingreso.css" rel="stylesheet">
<style>
    .d-none{
        display: none;
    }
</style>
</head>
<body>
<?php include("includes/nav.php") ?>
<div class="body">
<form action ="añadir2.php"  method="post" class = "form-signin text-center needs-validation" novalidate>
  <img class="img-rounded mb-4" src="includes/imagenes/logo.jpeg" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Alta usuario</h1>

                <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" id="cargo" name="cargo" onchange="habilitarPWD(this) || habilitarPIN(this)">
                        <option>Elija su cargo</option>
                        <option>Mozo</option>
                        <option>Delivery</option>
                        <option>Caja</option>
                        <option>Cocina</option>
                        <option>Gerente</option>
                        <option>Administrador</option>                 
                        </select>
                    
                    
                    </div>

                    <div class="form-outline mb-4  d-none" id="pin">
                        <label>PIN</label>
                        <input type="PIN" class="form-control"  id="pin" name="inputPin" placeholder="Ingrese PIN" >
                    </div>

                    <div class="form-outline mb-4  d-none" id="pwd">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" name="inputPwd" placeholder="Ingrese contraseña">              
                    </div> 
                    <br>
                    <div class="checkbox">
                        <button type="submit" name="submit" class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Ingresar</button>
            </form>
        </div>
         
        <script>
            function habilitarPIN(answer){
                console.log(answer.value);
                if (answer.value=='Mozo'||answer.value=='Delivery'||answer.value=='Caja'||answer.value=='Cocina'){
                    document.getElementById('pin').classList.remove('d-none');
                }else{
                    document.getElementById('pin').classList.add('d-none');
                }
                               
            };
            function habilitarPWD(answer){
                console.log(answer.value);
                if (answer.value=='Gerente'||answer.value=='Administrador'){
                    document.getElementById('pwd').classList.remove('d-none');
                }else{
                    document.getElementById('pwd').classList.add('d-none');
                }
            
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                    })
                })()
            };
        </script>

<!-- final body -->
<?php include("includes/footer.php"); ?>

<!--  minlength="3" maxlength="16" pattern="[A-Za-z]" 
      minlength="3" maxlength="16" pattern="[A-Za-z]" 
--> 