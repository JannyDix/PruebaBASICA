<?php
    $user   =   "root";
    $pass   =   "";
    $db     =   "Prueba";
    $host   =   "localhost";

    $conexion   = mysqli_connect($host,$user,$pass);
    $link       = mysqli_select_db($conexion,$db);
?>