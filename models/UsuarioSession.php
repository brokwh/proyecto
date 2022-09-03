<?php

class UsuarioSession{

    public function __construct(){

        session_start();

    }

    public function redirect(){

        header("Location:index.php");

    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
        echo $_SESSION['user'];
    }

    public static function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>