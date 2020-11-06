<?php 
    class AdicionalesModel{
        private $conn;

        private $adicionales;

        public function __construct(){
            $database = new Conexion;
            $this->conn = $database->getConexion();
        }

        public function insertData($cuenta, $informacion){
            $sql = "INSERT INTO Adicionales (informacionAdicional, cuentaAdicional) VALUES (:informacion, :cuenta)";

            $query = $this->conn->prepare($sql);
            $query->bindParam(":informacion", $informacion);
            $query->bindParam(":cuenta", $cuenta);

            if($query->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function saveAdicionales($cuenta){
            $estado;

            $sql = "SELECT * FROM Adicionales WHERE cuentaAdicional = :cuenta";

            $query = $this->conn->prepare($sql);
            $query->bindParam(":cuenta", $cuenta);

            $estado = $query->execute();

            while ($fila = $query->fetch(PDO::FETCH_ASSOC)) {
                $this->adicionales[] = $fila;
            }

            if ($estado) {
                return true;
            }else{
                return false;
            }
            
        }

        public function getAdicionales(){
            return $this->adicionales;
        }
    }