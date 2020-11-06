<?php  
    require "app/model/CuentasModel.php";

    class CuentasController{
        private $model;

        private $cuentas = array();

        public function __construct(){
            $this->model = new CuentasModel;
        }

        public function prepareData($usuario, $correo, $telefono, $clave, $servicio){
            if($servicio != 0){
                $usuario    = htmlspecialchars($usuario );
                $correo     = htmlspecialchars($correo  );
                $telefono   = htmlspecialchars($telefono);
                $clave      = htmlspecialchars($clave   );
                $servicio   = htmlspecialchars($servicio);

                if($this->model->insertData($usuario, $correo, $telefono, $clave, $servicio)){
                    echo "Se integró Correctamente";
                }else{
                    echo "No se integró";
                }
            }else{
                echo "Debes seleccionar un servicio";
            }
        }

        public function listarCuentas(){
            if($this->model->saveCuentas()){
                $this->cuentas = $this->model->getCuentas();

                echo "<table>";
                echo "
                    <tr>
                        <td>Numero</td>
                        <td>Usuario</td>
                        <td>Correo</td>
                        <td>Telefono</td>
                        <td>Clave</td>
                        <td>Servicio</td>
                        <td>Adicional</td>
                    </tr>
                ";

                for ($i=0; $i < count($this->cuentas); $i++) { 
                    echo "
                        <tr>
                            <td>".$this->cuentas[$i]['idCuenta']."</td>
                            <td>".$this->cuentas[$i]['usuarioCuenta']."</td>
                            <td>".$this->cuentas[$i]['correoCuenta']."</td>
                            <td>".$this->cuentas[$i]['telefonoCuenta']."</td>
                            <td>".$this->cuentas[$i]['claveCuenta']."</td>
                            <td>".$this->cuentas[$i]['nombreServicio']."</td>
                            <td><a href='adicionales.php?cuenta=".$this->cuentas[$i]['idCuenta']."'>ver</a></td>
                        </tr>
                    ";
                }

                echo "</table>";
            }
        }
    }