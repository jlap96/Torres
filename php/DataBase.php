<?php

    class DataBase{   

        protected object $db_conection;

        public function __construct(){
            try {
                $servidor = 'localhost';
                $usuario = 'root';
                $password = '';
                $dataBase = 'torres';

                $this->db_conection = new PDO("mysql:host=$servidor;port=3306;dbname=$dataBase", $usuario, $password);
        
            } catch (\Throwable $th) {
                echo "La conexión ha fallado: ";
            }
        }
    }
    