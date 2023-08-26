<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("Database.php");

class Pagos extends Database
    {
        public function StudentPayment(){

            parent::__construct();

        }

        public function obtenerPagos(){

            
            $query = $this->db_conection->query("SELECT * FROM pagos");

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $contar = $query->rowCount(PDO::FETCH_ASSOC);

            if($contar > 0){
                return printf(json_encode(array("code" => "201", "data" => $data )));
            }else{
                return printf(json_encode(array("code" => "404", "data" => [] )));
            }
            

        }


        public function obtenerPagoPorId(){

            $id = $_GET['id'];

            $query = $this->db_conection->query("SELECT * FROM pagos where FolioPago = '$id'");

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $contar = $query->rowCount(PDO::FETCH_ASSOC);

            if($contar > 0){
                return printf(json_encode(array("code" => "201", "data" => $data )));
            }else{
                return printf(json_encode(array("code" => "404", "data" => [] )));
            }
            

        }
    }

$acceso = new Pagos();

switch ($_GET['metodo']) {
    case 'obtener':
        $data = $acceso->obtenerPagos();
        break;

    case 'obtenerPorId':
        $data = $acceso->obtenerPagoPorId();
        break;
    
    default:
        # code...
        break;
}

