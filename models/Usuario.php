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

    public function validarUsuario($user, $pass, $pin, $correo){
        $sql = ('SELECT * FROM usuarios WHERE tipo = "'. $user .'"  AND (pass ="'. $pass .'" AND email="'. $correo .'")  OR (pin ="'. $pin .'");');
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

    public function agregarUsuario($tipo, $pwd, $pin, $correo){

        $consulta = "INSERT INTO usuarios(email,tipo,pass,pin) VALUES('$correo','$tipo','$pwd',$pin);";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

    public function recuperarUsuario($email){
        $consulta = "UPDATE usuarios
        SET estadoRecuperar = 1
        WHERE email = '$email';";
     
        $query = mysqli_query($this->conn, $consulta);
    }

    public function eliminarUsuario($usuario){

        $consulta = "DELETE FROM usuarios WHERE id IN($usuario) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarUsuario($email,$tipo, $pass, $pin, $usuario){

        $consulta = "UPDATE usuarios
        SET email = '$email', tipo = '$tipo', pass = '$pass', pin = $pin , estadoRecuperar = 0
        WHERE id = $usuario;";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
    }
    

}

?> 