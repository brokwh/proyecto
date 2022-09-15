<?php
class Producto{ 
    private $conn; 
    private $productos;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->productos = array();
    }

    public function getProductos(){
        $consulta = "SELECT * FROM producto";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->productos[] = $filas;
        }
        return $this->productos;
    }

    public function eliminarProducto($producto){

        $consulta = "DELETE FROM producto WHERE id IN($producto) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarProducto($nombre, $tipo, $precio, $producto){

        $consulta = "UPDATE producto
        SET nombre = '$nombre', tipo = '$tipo', precio = $precio
        WHERE id = $producto;";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function agregarProducto($nombre, $tipo, $precio){

        $consulta = "INSERT INTO producto(nombre,tipo,precio) VALUES('$nombre','$tipo','$precio');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

}
?>