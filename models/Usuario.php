<?php


class Usuario{
    private $conn;
    private $username;
    
    public function __construct(){
        require_once("Models/db.php");
        $this->conn=db::conexion();
       
    }

    public function validarUsuario($user, $pass, $pin){
        //$md5pass = md5($pass);
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
}

?> 