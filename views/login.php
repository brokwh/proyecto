<!DOCTYPE html>
<html lang="es">
<head>

<style>
.contenedor{
    opacity:90%;
    margin-left: 10%;
    margin-right:10% ;
}

.d-none{
    display: none;
}

body {
    background: url('includes/imagenes/pescaderias-marisquerias-bogota.png') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}
    </style> 
    <title>Ingreso</title>

<?php require_once("../proyecto/controllers/agregarUsuario.php"); ?>

</head>
<body>

</head>
<?php include("includes/navLogin.php");?>
<?php if(isset($_GET['ok']) && $_GET['ok'] == 1){ ?>
        <div id='alerts' class="alert alert-success alert-dismissible fade show my-3 mx-2" role="alert">
        Se ha recuperado <strong>usuario.</strong>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      </div><?php } ?>
        <br>
        <div class=contenedor>
 
            <div class="container-fluid p-3 bg-dark text-white">
         <h3>LOGIN</h3>
         
         <form action =""  method="post" class = "form-signin" novalidate>
   
                <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" id="cargo" name="cargo" onchange="habilitarPWD(this) || habilitarPIN(this) || habilitarEmail(this)">
                        <option>Elija su cargo</option>
                        <option>Mozo</option>
                        <option>Caja</option>
                        <option>Cocina</option>
                        <option>Gerente</option>
                        <option>Administrador</option>                 
                        
                    </select>
                    
                     
                    </div>
                    <br>

                    <div class="form-outline mb-4  d-none" id="emailDiv">
                        <label>Correo</label>
                        <input type="email" class="form-control"  id="email" name="email" placeholder="Ingrese correo" >
                    </div>

                    <div class="form-outline mb-4  d-none" id="pinDiv">
                        <label>PIN</label>
                        <input type="password" class="form-control"  id="pin" name="pin" placeholder="Ingrese PIN" novalidate>
                    </div>
                    
                    <div class="form-outline mb-4  d-none" id="pwdDiv">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Ingrese contraseña" novalidate>              
                    </div> 
                                 
                    <div class="text-start">
                    <a href="http://localhost/proyecto/views/recuperarPwd.php"><small>Recuperar contraseña</small></a>
                    </div>
                    <br>
                 <div class="form-check">
                    <input class="form-check-input" type="checkbox" onclick="Toggle()"></input>
                    <label class="form-check-label" for="flexCheckDefault">
                        Mostrar contraseña
                    </label>
                    </div>                 
                    <div class="checkbox">                       
                        <button name="ingresar" id="ingresar" type="submit" class="btn  btn-blue btn-primary btn-block mb-4 d-flex position-absolute top-20 start-50 translate-middle">Ingresar</button>
                        <br>  
                    </div>
                </form>  
            </div>
        </div>
   
                <!--MODAL-->
                <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Registro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                    
                        <form action="" method="post" class = "form-signin">
                                <div class="modal-body mx-3">
                                <div class="form-group">
                                        <label>Cargo</label>
                                        <select class="form-control" id="cargoRegistro" name="cargoRegistro" onchange="habilitarPWD(this) || habilitarPIN(this) || habilitarEmail(this)">
                                        <option>Elija su cargo</option>
                                        <option>Mozo</option>
                                        <option>Caja</option>
                                        <option>Cocina</option>
                                        <option>Gerente</option>
                                        <option>Administrador</option>                 
                                        </select>
                                        
                                    
                                    
                                    </div>
                                    <br>

                                    <div class="form-outline mb-4  d-none" id="emailDivModal">
                                        <label>Correo</label>
                                        <input type="email" class="form-control"  id="emailRegistro" name="emailRegistro" placeholder="Ingrese correo" required>
                                    </div>

                                    <div class="form-outline mb-4  d-none" id="pinDivModal">
                                        <label>PIN</label>
                                        <input type="password" class="form-control"  id="pinRegistro" name="pinRegistro" placeholder="Ingrese PIN" required>
                                    </div>

                                    <div class="form-outline mb-4  d-none" id="pwdDivModal">
                                        <label>Contraseña:</label>
                                        <input type="password" class="form-control" id="pwdRegistro" name="pwdRegistro" placeholder="Ingrese contraseña" required>              
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
                if (answer.value=='Mozo'||answer.value=='Caja'||answer.value=='Cocina'){
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

            function habilitarEmail(answer){
                console.log(answer.value);
                if (answer.value=='Administrador'||answer.value=='Gerente'){
                    document.getElementById('emailDiv').classList.remove('d-none');
                    document.getElementById('emailDivModal').classList.remove('d-none');
                }else{
                    document.getElementById('emailDiv').classList.add('d-none');
                    document.getElementById('emailDivModal').classList.add('d-none');
                }
                               
            };

        function Toggle() {
            
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
            $(document).ready(function() {        
        setTimeout(function() {
          $("#alerts").hide(6000);
          }, 3000);
        });                     
                
            
        </script>
        </body>
<!-- final body -->
<?php include("includes/footer.php"); ?>