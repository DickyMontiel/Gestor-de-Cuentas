<?php
    class CuentasModel{
        private $conn;

        public function __construct(){
            $database = new Conexion;
            $this->conn = $database->getConexion();
        }

        public function insertData($usuario, $correo, $telefono, $clave, $servicio){
            $sql = "INSERT INTO Cuentas (usuarioCuenta, correoCuenta, telefonoCuenta, claveCuenta, servicioCuenta) VALUES (:usuario, :correo, :telefono, :clave, :servicio)";
        
            $query = $this->conn->prepare($sql);
            $query->bindParam(":usuario", $usuario);
            $query->bindParam(":correo", $correo);
            $query->bindParam(":telefono", $telefono);
            $query->bindParam(":clave", $clave);
            $query->bindParam(":servicio", $servicio);

            if($query->execute()){
                return true;
            }else{
                return false;
            }

        }
    }