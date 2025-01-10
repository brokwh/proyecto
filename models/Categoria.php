<?php
class Categoria{ 
    public $conn; 
    private $categoria;
    private $ultimoId;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->categoria = array();
    }

    public function getCategoria(){
        $consulta = "SELECT * FROM categoria";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->categoria[] = $filas;
        }
        return $this->categoria;
    }

    public function eliminarCategoria($categoria){

        $consulta = "DELETE FROM categoria WHERE id IN($categoria) ";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarCategoria($nombre, $categoria){

        $consulta = "UPDATE categoria
        SET nombre = '$nombre'
        WHERE id = $categoria;";
        echo $consulta ;
        $query = mysqli_query($this->conn, $consulta);
    }

    public function agregarCategoria($categoria){

        $consulta = "INSERT INTO categoria(nombre) VALUES('$categoria');";
        echo $consulta;
        $query = mysqli_query($this->conn, $consulta);
        
    }

}
?>