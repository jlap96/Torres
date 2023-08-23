<?php

    class DataBase{   

        protected $db_conection;

        public function DataBase(){

            $server = '192.168.1.70';
            $user = 'root';
            $password = '';
            $dataBase = 'torres';

            $this->db_conection = new PDO("mysql:host=$servidor;port=3305;dbname=$dataBase", $usuario, $password);
    
            if( $this->db_conection->connect_errno ){

                echo "Error al conectar a base de datos pa". $this->db_conection->connect_error;

                return;

            }
            
            $this->db_conection->set_charset('utf8');
        }
    }
    