<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

try{
    $conexion = new PDO("mysql:host=$servidor;port=3305;dbname=torres", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion realizada con éxito";
}
catch(PDOException $e){
    echo "La conexión ha fallado: " . $e->getMessage();
}
$conexion = null;