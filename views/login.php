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

<?php //require_once("../proyecto/controllers/agregarUsuario.php"); ?>

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
                        <label>tipo</label>
                        <select class="form-control" id="cargoRegistro" name="cargoRegistro">
                        <option disabled selected value>Elija su cargo</option>
                        <option>Administrador</option>
                        <option>Gerente</option>
                        <option>Mozo</option>
                        <option>Caja</option>   
                        <option>Cocina</option>
                                      
                        
                        </select>            
                    </div>
                    <br>

                    <div class="form-outline mb-4" id="pinDivModal">
                  <label>Correo</label>
                   <input type="text" class="form-control"  id="correo" name="correo" placeholder="Ingrese correo" required>
                   </div>

                    
                    <div class="form-outline mb-4" id="pwdDiv">
                        <label>Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Ingrese contraseña" required>              

                    </div>   
                                 
                    <div class="text-start">
                    <a href="views/recuperarPwd.php"><small>Recuperar contraseña</small></a>
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
   
               <!-- MODAL
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

                                    <div class="form-outline mb-4" >
                                        <label>Correo</label>
                                        <input type="text" class="form-control"  id="correo" name="correo" placeholder="Ingrese correo" required>
                                    </div>

                                    <div class="form-group">
                        <label>tipo</label>
                        <select class="form-control" id="cargoRegistro" name="cargoRegistro">
                        <option disabled selected value>Elija su cargo</option>
                        <option>Administrador</option>
                        <option>Gerente</option>
                        <option>Mozo</option>
                        <option>Caja</option>   
                        <option>Cocina</option>
                                      
                        
                        </select>            
                    </div>
                                    <div class="form-outline mb-4">
                                        <label>Contraseña:</label>
                                        <input type="password" class="form-control" id="pwdRegistro" name="pwdRegistro" placeholder="Ingrese contraseña" required>              
                                    </div>        

                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type='submit' id="registroB" name="registroB" class="btn btn-deep-orange">Registrarse</button>
                                </div>
                        </form>
                    </div>
                </div>-->
        </div>
<script>
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
                                   
                
            
        </script>
        </body>
<!-- final body -->
<?php include("includes/footer.php"); ?>