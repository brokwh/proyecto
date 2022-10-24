<?php
class mesa{ 
    public $conn; 
    private $mesa;
    private $ultimoId;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->productos = array();
    }

    public function getMesa(){
        $consulta = "SELECT * FROM mesa";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->mesa[] = $filas;
        }
        return $this->mesa;
    }

    public function eliminarMesa($mesa){

        $consulta = "DELETE FROM mesa WHERE id IN($mesa) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarMesa($estadoMesa, $id){

        $consulta = "UPDATE mesa
        SET estadoMesa = '$estadoMesa'
        WHERE id = $id;";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function agregarMesa($estadoMesa){

        $consulta = "INSERT INTO mesa(estadoMesa) VALUES('$estadoMesa');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

}
?>