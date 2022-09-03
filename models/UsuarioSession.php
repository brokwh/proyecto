<?php

class UsuarioSession{

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public static function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>