<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("DataBase.php");
echo "hello";

class Login extends DataBase
    {
        public function StudentPayment(){

            parent::__construct();

        }

        public function getStudentsUnpayment($matricula){

            $data = $this->db_conection->query("SELECT * FROM studentPayments WHERE idStudent = $matricula ");

            if( $data->num_rows > 0 ) return $data->fetch_all(MYSQLI_ASSOC);

            return false;
        }
    }