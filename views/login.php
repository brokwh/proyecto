<!DOCTYPE html>
<html lang="es">
<head>
<title>Ingreso</title>
<?php include("includes/header.php");?>
<?php require_once("../proyecto-main/controllers/agregarUsuario.php"); ?>
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
<?php include("includes/navLogin.php");?>

        <br>
        <div class="container justify-content-center h-100 text-center">
        <h2>Login</h2>
        </div>
        <div class="container justify-content-center h-100">
            <form action =""  method="post" class = "form-signin text-center">
                
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
                                 
                    <div class="text-start">
                    <a href="http://localhost/proyecto-main/views/recuperarPwd.php"><small>Recuperar contraseña</small></a>
                    </div>
                    <br>                 
                    <div class="checkbox">                       
                        <button name="ingresar" id="ingresar" type="submit" class="btn  btn-dark btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Ingresar</button>
           
                    </div>
                </form>    
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" onclick="Toggle()"></input>
                    <label class="form-check-label" for="flexCheckDefault">
                        Mostrar contraseña
                    </label>
                    </div>

            <!--modal registro-->
            
                <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Registro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    
                        <form action="" method="post">
                                <div class="modal-body mx-3">
                                <div class="form-group">
                                        
                                        <select class="form-control" id="cargoRegistro" name="cargoRegistro" onchange="habilitarPWD(this) || habilitarPIN(this)">
                                        <option>Elija su cargo</option>
                                        <option>Mozo</option>
                                        <option>Delivery</option>
                                        <option>Caja</option>
                                        <option>Cocina</option>
                                        <option>Gerente</option>
                                        <option>Administrador</option>                 
                                        </select>
                                        <label>Cargo</label>
                                    
                                    
                                    </div>
                                    <br>

                                    <div class="form-outline mb-4  d-none" id="pinDivModal">
                                        <label>PIN</label>
                                        <input type="password" class="form-control"  id="pinRegistro" name="pinRegistro" placeholder="Ingrese PIN" >
                                    </div>

                                    <div class="form-outline mb-4  d-none" id="pwdDivModal">
                                        <label>Contraseña:</label>
                                        <input type="password" class="form-control" id="pwdRegistro" name="pwdRegistro" placeholder="Ingrese contraseña">              
                                    </div>        

                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type='submit' id="registroB" name="registroB" class="btn btn-deep-orange">Registrarse</button>
                                </div>
                        </form>
                    </div>
                </div>
        </div>

           

          

        <script>
            function habilitarPIN(answer){
                console.log(answer.value);
                if (answer.value=='Mozo'||answer.value=='Delivery'||answer.value=='Caja'||answer.value=='Cocina'){
                    document.getElementById('pinDiv').classList.remove('d-none');
                    document.getElementById('pinDivModal').classList.remove('d-none');
                }else{
                    document.getElementById('pinDiv').classList.add('d-none');
                    document.getElementById('pinDivModal').classList.add('d-none');
                }
                               
            };
            function habilitarPWD(answer){
                console.log(answer.value);
                if (answer.value=='Gerente'||answer.value=='Administrador'){
                    document.getElementById('pwdDiv').classList.remove('d-none');
                    document.getElementById('pwdDivModal').classList.remove('d-none');
                }else{
                    document.getElementById('pwdDiv').classList.add('d-none');
                    document.getElementById('pwdDivModal').classList.add('d-none');
                }
            };

            function Toggle() {
                var temp = document.getElementById("pin");
                var tempp = document.getElementById("pwd");
                    if (temp.type === "password") {
                        temp.type = "text";
                    }
                    else {
                        temp.type = "password";
                    }
                    if (tempp.type === "password") {
                            tempp.type = "text";
                        }
                        else {
                            tempp.type = "password";
                    }
            } ; 
                                   
                
            
        </script>


<!-- final body -->
<?php include("includes/footer.php"); ?>