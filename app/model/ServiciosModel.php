<?php
    require "app/bin/Conexion.php";

    class ServiciosModel{
        private $nombreServicio;
        private $linkServicio;

        private $conn;

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
                echo "<h1>SE INGRESARON</h1>";
            }else{
                echo "<h1>NO SE INGRESARON</h1>";
            }
        }
    }