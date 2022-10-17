<?php
class Usuario{
    private $conn;
    private $usuarios;
    private $username;
    
    public function __construct(){
        include_once("db.php");
        $this->conn=db::conexion();
        $this->usuarios = array();
       
    }

    public function getUsuarios(){
        $consulta = "SELECT * FROM usuarios";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->usuarios[] = $filas;
        }
        return $this->usuarios;
    }

    public function validarUsuario($correo, $pass){
        $sql = ("SELECT * FROM usuarios WHERE correo =  '$correo'   AND pass = '$pass'");
        $query= mysqli_query($this->conn, $sql);
    
        if(mysqli_fetch_array($query)){
            
            return true;
            
        }else{
            return false;
        }
    }

    public function setUser($user){
        $sql = ('SELECT * FROM usuarios WHERE tipo = "'. $user .'"');
        $query= mysqli_query($this->conn, $sql);
        
        foreach ($query as $currentUser) {
            $this->tipo = $currentUser['tipo'];
        }

          


    }

    public function getNombre(){
        return $this->tipo;
    }

    public function agregarUsuario($correo,$tipo, $pwd ){
        $consulta = "INSERT INTO usuarios(correo,tipo,pass) VALUES('$correo','$tipo', '$pwd' );";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

    public function recuperarUsuario($email){

        $consulta = "SELECT * FROM `usuarios` WHERE email = '$email'";
        $query = mysqli_query($this->conn, $consulta);
        
    }

    public function eliminarUsuario($usuario){

        $consulta = "DELETE FROM usuarios WHERE id IN($usuario) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarUsuario($correo, $tipo, $pass, $usuario){

        $consulta = "UPDATE usuarios
        SET correo = '$correo', tipo = '$tipo', pass = '$pass'
        WHERE id = $usuario;";
        $query = mysqli_query($this->conn, $consulta);
    }

}

?> 