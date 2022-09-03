<?php
session_start();
session_destroy();
header("Location:http://localhost/proyecto-main/index.php");

?>