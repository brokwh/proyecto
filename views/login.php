<!DOCTYPE html>
<html lang="es">
<head>

<style>
        .contenedor{
    opacity:90%;
margin-left: 20%;
margin-right:20% ;
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

        <br>
        <div class=contenedor>
 
            <div class="container-fluid p-3 my-3 bg-dark text-white">
         <h3>LOGIN</h3>
         
         <form action =""  method="post" class = "form-signin" novalidate>
   
                <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" id="cargo" name="cargo" onchange="habilitarPWD(this) || habilitarPIN(this)">
                        <option>Elija su cargo</option>
                        <option>Mozo</option>
                        <option>Caja</option>
                        <option>Cocina</option>
                        <option>Gerente</option>
                        <option>Administrador</option>                 
                        
                    </select>
                    
                     
                    </div>
                    <div class="form-outline mb-4  d-none" id="pinDiv">
                        <label>PIN</label>
                        <input type="password" class="form-control"  id="pin" name="pin" placeholder="Ingrese PIN" required>
                    </div>
                    
                    <div class="form-outline mb-4  d-none" id="pwdDiv">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Ingrese contraseña" required>              

                    </div>   
                                 
                    <div class="text-start">
                    <a href="http://localhost/proyecto-main/views/recuperarPwd.php"><small>Recuperar contraseña</small></a>
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
                    
                        <form action="" method="post" class = "form-signin"novalidate>
                                <div class="modal-body mx-3">
                                <div class="form-group">
                                        <label>Cargo</label>
                                        <select class="form-control" id="cargoRegistro" name="cargoRegistro" onchange="habilitarPWD(this) || habilitarPIN(this)">
                                        <option>Elija su cargo</option>
                                        <option>Mozo</option>
                                        <option>Caja</option>
                                        <option>Cocina</option>
                                        <option>Gerente</option>
                                        <option>Administrador</option>                 
                                        </select>
                                        
                                    
                                    
                                    </div>
                                    <br>

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

        </body>
<!-- final body -->
<?php include("includes/footer.php"); ?>