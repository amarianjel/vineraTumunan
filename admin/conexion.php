<?php

if (!isset($_SESSION)) { session_start(); }
header("Content-Type: text/html; charset=utf8");
date_default_timezone_set('America/Santiago');

    $host = "localhost:3306";
    $user = "root";
    $user = "tumu971com_prueba";
    $clave = "";
    //$clave = "abraham1307";
    $bd = "tumu971com_prueba";

    // admin
    // Viñatumuñan@_22
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
    
    ?>