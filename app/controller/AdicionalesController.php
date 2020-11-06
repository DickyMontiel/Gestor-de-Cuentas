<?php 
    require "app/model/AdicionalesModel.php";

    class AdicionalesController{
        private $model;

        private $adicionales = array();

        public function __construct(){
            $this->model = new AdicionalesModel;
        }

        public function prepareData($cuenta, $informacion){
            $informacion = htmlspecialchars($informacion);
            $cuenta = htmlspecialchars($cuenta);

            if($this->model->insertData($cuenta, $informacion)){
                echo "Se integró exitosamente";
            }else{
                echo "No se integró";
            }
        }

        public function listarAdicionales($cuenta){
            $cuenta = htmlspecialchars($cuenta);

            if($this->model->saveAdicionales($cuenta)){
                $this->adicionales = $this->model->getAdicionales();

                echo "<table>";
                echo "
                    <tr>
                        <td>Informaci&oacute;n</td>
                    </tr>
                ";
                for ($i=0; $i < count($this->adicionales); $i++) { 
                    echo "
                        <tr>
                            <td>".$this->adicionales[$i]['informacionAdicional']."</td>
                        </tr>
                    ";
                }

                echo "</table>";
            }
        }
    }