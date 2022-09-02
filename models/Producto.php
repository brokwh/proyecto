<?php
class Producto{ 
    private $conn; 
    private $alumnos;

    public function __construct(){
        require_once("../models/db.php");
        $this->conn=db::conexion();
        $this->alumno = array();
    }

    public function getProductos(){
        $sql = "SELECT * FROM producto";
        $query = mysqli_query($this->conn, $sql);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->alumnos[] = $filas;
        }
        return $this->alumnos;
    }

    public function eliminarAlumno($alumno){

        $query1 = "DELETE FROM alumnos WHERE id IN($alumno) ";
        $query1_run = mysqli_query($this->conn, $query1);
       
        if($query1_run)
        {
            header("Location: index.php");
        }
     
    }
}
?>