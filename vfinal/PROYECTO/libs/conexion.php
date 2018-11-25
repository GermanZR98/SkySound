<?php
//Archivo de conexión con la BBDD

function Conectar (){
    $conexion = null;
    $host = "localhost";
    $db = "skysound";
    $user = "root";
    $pwd = "";

    try {
        $conexion = new PDO("mysql:host=".$host.";dbname=".$db,$user,$pwd);
    }
    catch (PDOException $e) {
        echo "<p>No se pudo conectar con la base de datos</p>";
        exit;
    }
    return $conexion;
}