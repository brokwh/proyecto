<?php
class Pagos { 
    public $conn; 
    private $pagos;


    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->pagos = array();
    }

    public function getPagos(){
        $consulta = "SELECT * FROM pago";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->pagos[] = $filas;
        }
        return $this->pagos;
    }

    public function generarPago($orden){

        $consulta = "INSERT into pago(imagen,nombre,tipo,precio, vegano, vegetariano, celiaco)  VALUES('$imagen','$nombre','$tipo','$precio', $veganoB, $vegetarianoB, $celiacoB);";
        $query = mysqli_query($this->conn, $consulta);
        
    }


    


}
?>