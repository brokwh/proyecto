<?php
class Reserva{ 
    public $conn; 
    private $reserva;
    private $ultimoId;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->reserva = array();
    }

    public function getReserva(){
        $consulta = "SELECT * FROM reserva";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->reserva[] = $filas;
        }
        return $this->reserva;
    }

    public function Hecho($reserva){

        $consulta = "UPDATE reserva
        SET  estado = 'Hecho'
        WHERE id = $reserva;";
        $query = mysqli_query($this->conn, $consulta);
    }
    public function eliminarReserva($reserva){

        $consulta = "DELETE FROM reserva WHERE id IN($reserva) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarReserva($cedula, $telefonoCliente, $fechaHora, $reserva){

        $consulta = "UPDATE reserva
        SET cedula = $cedula, telefonoCliente = $telefonoCliente, fechaHora = '$fechaHora'
        WHERE id = $reserva;";
        echo $consulta ;
        $query = mysqli_query($this->conn, $consulta);
    }

    public function agregarReserva($cedula, $telefonoCliente, $fechaHora){

        $consulta = "INSERT INTO reserva(cedula,telefonoCliente,fechaHora) VALUES('$cedula','$telefonoCliente','$fechaHora');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

}
?>