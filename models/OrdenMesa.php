<?php
class Orden{ 
    public $conn; 
    private $orden;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->orden = array();
        
    }
  
    public function getOrden(){
        $consulta = "SELECT * FROM orden,mesa WHERE orden.numeroMesa=mesa.id;";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->orden[] = $filas;
        }
        return $this->orden;
    }

    public function eliminarComanda($orden){

        $consulta = "DELETE FROM orden,mesa WHERE orden.numeroMesa IN($orden) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    /*public function editarComanda($nombre, $tipo, $precio, $producto){

        $consulta = "UPDATE proord
        SET nombre = '$nombre', tipo = '$tipo', precio = $precio
        WHERE id = $producto;";
        $query = mysqli_query($this->conn, $consulta);
        
    }

    public function generarComanda($mesa){
       
        $sql = "INSERT INTO orden (numeroMesa) VALUES('$mesa');";
        $conn = $this->conn;
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            echo "New record created successfully. Last inserted ID is: " . $last_id;
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
          

    }

    public function agregarComanda($idPro, $idOrd){

        $consulta = "INSERT INTO proord (idPro,idOrd, descripcion) VALUES($idPro, $idOrd);";
        echo $consulta;
        
        $query = mysqli_query($this->conn, $consulta);
        
    }*/
}