<?php
//CONEXION A LA BASE DE DATOS 
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "psuencuesta";
    $conex = mysqli_connect($host, $user, $pass, $db);
    $con = new mysqli($host, $user, $pass, $db);
?>