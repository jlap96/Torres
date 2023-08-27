<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("DataBase.php");
require_once "DataBase.php";


class Pagos extends DataBase
    {
        public function StudentPayment(){

            parent::__construct();

        }

        public function agregarUsuario(){

            $idUsuario = $_POST['IdUsuario'];
            $nombre = $_POST['Nombre'];
            $apellidoPaterno = $_POST['ApellidoPaterno'];
            $apellidoMaterno = $_POST['ApellidoMaterno'];
            $departamento = $_POST['Departamento'];
            $password = $_POST['Password'];

            $query = $this->db_conection->query("INSERT INTO usuarios (IdUsuario, Nombre, ApellidoPaterno, ApellidoMaterno, Departamento, TipoUsuario, Password)
            VALUES ('$idUsuario','$nombre','$apellidoPaterno','$apellidoMaterno', '$departamento', 'CO', '$password')");

            $data = $query->fetch(PDO::FETCH_ASSOC);

            $contar = $query->rowCount();

            if($contar > 0){
                return printf(json_encode(array("code" => "201", "data" => [], "message" => "Creado correctamente" )));
            }else{
                return printf(json_encode(array("code" => "500", "data" => [], "message" => "Error al crear usuario" )));
            }
            

        }

    }

$acceso = new Pagos();

switch ($_GET['metodo']) {
    case 'agregarUsuario':
        $data = $acceso->agregarUsuario();
        break;
    
    default:
        return printf(json_encode(array("code" => "404", "message" => "Peticion no valida" )));
        break;
}

