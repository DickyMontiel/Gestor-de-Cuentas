<?php
    class ServiciosModel{
        private $nombreServicio;
        private $linkServicio;

        private $conn;
        private $listaServicios = array();

        public function __construct(){
            $database = new Conexion;
            $this->conn = $database->getConexion();
        }

        public function insertData($nombreServicio, $linkServicio){
            $sql = "INSERT INTO Servicios (nombreServicio, urlSerivicio) VALUES (:nombreServicio, :linkServicio)";

            $query = $this->conn->prepare($sql);
            $query->bindParam(":nombreServicio", $nombreServicio);
            $query->bindParam(":linkServicio", $linkServicio);

            if($query->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function saveServicios(){
            $sql = "SELECT * FROM Servicios ORDER BY nombreServicio ASC";
            
            $query = $this->conn->prepare($sql);
            $query->execute();

            while($fila = $query->fetch(PDO::FETCH_ASSOC)){
                $this->listaServicios[] = $fila;
            }

            if(is_array($this->listaServicios)){
                return true;
            }else{
                return false;
            }
        }

        public function getListaServicios(){
            return $this->listaServicios;
        }
    }