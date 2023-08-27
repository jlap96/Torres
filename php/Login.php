<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ("Database.php");

class Login extends Database
    {
        public function StudentPayment(){

            parent::__construct();

        }

        public function obtenerusuarios(){

            $usuario = $_POST['usuario'];
            $password = $_POST['contrasena'];
            
            $query = $this->db_conection->query("SELECT * FROM usuarios where idUsuario = '$usuario' and Password = '$password' LIMIT 1");

            $contar = $query->rowCount(PDO::FETCH_ASSOC);

            if($contar === 1){
                session_start();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
                if($data[0]['TipoUsuario'] === "AD"){

                    $_SESSION["TipoUsuario"] = "AD";
                    header('Location: ../UsuarioAd/Inicio.php');
                    return;
                }else{
                    $_SESSION["TipoUsuario"] = "CO";
                    header('Location: ../UsuarioCo/Inicio.php');
                    return;
                }
            }

            header('Location: ../Home/InicioSesion.html');

        }
    }

$acceso = new Login();
$data = $acceso->obtenerusuarios();
