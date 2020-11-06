<?php  
    require "app/model/CuentasModel.php";

    class CuentasController{
        private $model;

        private $listaServicios = array();

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
    }