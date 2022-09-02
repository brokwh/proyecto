<!DOCTYPE html>
<html lang="es">
<head>
<title>Ingreso</title>
<?php include("includes/header.php");?>

<style>
</style>
</head>
<body>
<style>
    .d-none{
        display: none;
    }
</style>
</head>


        <div class="container justify-content-center h-100 text-center">
        <h2>Login</h2>
        </div>
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center needs-validation" novalidate>
                
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

                    <div class="form-outline mb-4  d-none" id="pinDiv">
                        <label>PIN</label>
                        <input type="password" class="form-control"  id="pin" name="pin" placeholder="Ingrese PIN" >
                    </div>

                    <div class="form-outline mb-4  d-none" id="pwdDiv">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Ingrese contraseña">              
                    </div>                    
                    <br>  
                    <br>                 
                    <div class="checkbox">                       
                        <button type="submit" class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Ingresar</button>
            </form>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" onclick="Toggle()"></input>
                    <label class="form-check-label" for="flexCheckDefault">
                        Mostrar contraseña
                    </label>
                    </div>
        <script>
            function habilitarPIN(answer){
                console.log(answer.value);
                if (answer.value=='Mozo'||answer.value=='Delivery'||answer.value=='Caja'||answer.value=='Cocina'){
                    document.getElementById('pinDiv').classList.remove('d-none');
                }else{
                    document.getElementById('pinDiv').classList.add('d-none');
                }
                               
            };
            function habilitarPWD(answer){
                console.log(answer.value);
                if (answer.value=='Gerente'||answer.value=='Administrador'){
                    document.getElementById('pwdDiv').classList.remove('d-none');
                }else{
                    document.getElementById('pwdDiv').classList.add('d-none');
                }
            };

                function Toggle() {
            var temp = document.getElementById("pwd");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        } ; 
        function Toggle() {
            var temp = document.getElementById("pin");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        } ;                         
                
            
        </script>


<!-- final body -->
<?php include("includes/footer.php"); ?>