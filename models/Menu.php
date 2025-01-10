<?php
class Menu{ 
    public $conn; 
    private $menu;
    private $ultimoId;

    public function __construct(){
        require_once("db.php");
        $this->conn=db::conexion();
        $this->menu = array();
    }

    public function getMenu(){
        $consulta = "SELECT * FROM menu";
        $query = mysqli_query($this->conn, $consulta);
        
        
        while($filas = mysqli_fetch_array($query)){
            $this->menu[] = $filas;
        }
        return $this->menu;
    }

    public function eliminarMenu($menu){

        $consulta = "DELETE FROM menu WHERE id IN($menu) ";
        $query = mysqli_query($this->conn, $consulta);
    }

    public function editarMenu($nombreMenu, $imagenMenu, $menu){

        $consulta = "UPDATE menu
        SET nombre = $nombreMenu, imagenMenu = '$imagenMenu'
        WHERE id = $menu;";
       
        $query = mysqli_query($this->conn, $consulta);
    }

    public function agregarMenu($nombreMenu, $imagenMenu){

        $consulta = "INSERT INTO menu(nombre,imagenMenu) VALUES('$nombreMenu','$imagenMenu');";
        
        $query = mysqli_query($this->conn, $consulta);
        
    }

}
?>