<?php
class MetodoPago{ 
    public $conn; 
    private $metodoPago;
    private $ultimoId;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->metodoPago = array();
    }

    public function getMetodoPago(){
        $consulta = "SELECT * FROM metodopago";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->metodoPago[] = $filas;
        }
        return $this->metodoPago;
    }
    public function getMetodoPagoTarjeta(){
        $consulta = "SELECT * FROM metodopago WHERE tipo='Tarjeta'";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->metodoPago[] = $filas;
        }
        return $this->metodoPago;
    }
    public function getMetodoPagoOtro(){
        $consulta = "SELECT * FROM metodopago WHERE tipo='Otro'";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->metodoPago[] = $filas;
        }
        return $this->metodoPago;
    }

    public function eliminarMetodoPago($metodoPago){

        $consulta = "DELETE FROM metodopago WHERE id IN($metodoPago) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarMetodoPago($nombre,$tipo,$metodoPago){

        $consulta = "UPDATE metodopago
        SET nombre = '$nombre', tipo = '$tipo'
        WHERE id = $metodoPago;";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
    }

    public function agregarMetodoPago($nombre,$tipo){

        $consulta = "INSERT INTO metodopago(nombre,tipo) VALUES('$nombre','$tipo');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

}
?>