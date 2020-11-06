<?php
    class Conexion{
        private $conn;

        public function __construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=DBGestorDeCuentas", "root", "");
        }

        public function getConexion(){
            return $this->conn;
        }
    }