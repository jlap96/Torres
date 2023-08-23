<?php

    class Database{   

        protected $db_conection;

        public function DataBase(){
            try {
                $servidor = 'localhost';
                $usuario = 'root';
                $password = 'root';
                $dataBase = 'torres';

                $this->db_conection = new PDO("mysql:host=$servidor;port=3306;dbname=$dataBase", $usuario, $password);
        
            } catch (\Throwable $th) {
                echo "La conexión ha fallado: ";
            }
        }
    }
    