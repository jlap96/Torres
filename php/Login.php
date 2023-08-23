<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("Database.php");
echo "hello";

class Login extends Database
    {
        public function StudentPayment(){

            parent::__construct();

        }

        public function obtenerusuarios(){

            $usuario = $_POST['usuario'];
            $password = $_POST['contrasena'];
            //echo ("SELECT * FROM usuarios where idUsuario = $usuario and Password = $password"); die;
            
            $query = $this->db_conection->query("SELECT * FROM usuarios where idUsuario = '$usuario' and Password = '$password'");
            $data = $query->rowCount(PDO::FETCH_ASSOC);
            echo($data);
              // set the resulting array to associative
            // iterate over rows
            foreach($data as $row) { 
                // iterate over values in each row
                foreach($row as $v) { 
                    echo $v, " ";
                }
                echo "<br>";
            }
            die;
            if( $data->num_rows > 0 ) return $data->fetch_all(MYSQLI_ASSOC);

            return false;
        }
    }

$acceso = new Login();
$data = $acceso->obtenerusuarios();

var_dump($data);