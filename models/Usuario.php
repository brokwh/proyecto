<?php


class Usuario{
    private $conn;
    private $username;
    
    public function __construct(){
        include_once("db.php");
        $this->conn=db::conexion();
       
    }

    public function validarUsuario($user, $pass, $pin){
        $sql = ('SELECT * FROM usuarios WHERE tipo = "'. $user .'"  AND pwd ="'. $pass .'" OR pin ="'. $pin .'"');
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

    public function agregarUsuario($tipo, $pwd, $pin){

        $consulta = "INSERT INTO usuarios(tipo,pwd,pin) VALUES('$tipo','$pwd','$pin');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

    public function recuperarUsuario($email){

        $consulta = "SELECT * FROM `usuarios` WHERE email = '$email'";
        $query = mysqli_query($this->conn, $consulta);
        
    }

}

?> 