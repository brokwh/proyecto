<?php
class Comanda{ 
    private $conn; 
    private $comandas;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->comandas = array();
    }

    public function getComandas(){
        $consulta = "SELECT * FROM orden";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->comandas[] = $filas;
        }
        return $this->comandas;
    }

    public function eliminarComanda($comanda){

        $consulta = "DELETE FROM orden WHERE id IN($comanda) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarComanda($nombre, $tipo, $precio, $producto){

        $consulta = "UPDATE producto
        SET nombre = '$nombre', tipo = '$tipo', precio = $precio
        WHERE id = $producto;";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function generarComanda($mesa){

        $consulta = "INSERT INTO orden (numeroMesa) VALUES('$mesa');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

    public function agregarComanda($nombre, $tipo, $precio, $detalles){

        $consulta = "INSERT INTO proord (id,idPro,idOrd, descripcion) VALUES('','$producto','$BotonConfirmador', '$detalles');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }
}