<?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

    session_start();
    include_once 'conexion.php';
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $sentencia = $bd->prepare('select * from usuarios where IdUsuario = ? and Password = ?;');
    $sentencia->execute([$usuario, $contrasena]);
    $datos = $sentencia->fetch(PDO::FETCH_OBJ);
    print_r($datos);
?>