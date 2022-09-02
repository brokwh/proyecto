<?php
class db{

    public static function conexion(){
        
        try{
            $host = "localhost";
            $user = "root";
            $pass = "";
            $bd = "proyecto";
            $conn = mysqli_connect($host, $user, $pass);
            mysqli_select_db($conn, $bd);
            return $conn;
        }catch(Exception $e){

            die('Error'. $e->getMessage());
            echo "Linea de error". $e->getLine();

        }
    }
}
?>