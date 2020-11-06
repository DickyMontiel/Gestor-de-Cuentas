<?php
    require "app/model/ServiciosModel.php";

    class ServiciosController{
        private $nombreServicio;
        private $linkServicio;

        private $model;

        public function __construct(){
            $this->model = new ServiciosModel;
        }

        public function prepareData($nombreServicio, $linkServicio){
            $this->nombreServicio = htmlspecialchars($nombreServicio);
            $this->linkServicio = htmlspecialchars($linkServicio);

            if($this->model->insertData($this->nombreServicio, $this->linkServicio)){
                echo "<h1>SE INGRESARON</h1>";
            }else{
                echo "<h1>NO SE INGRESARON</h1>";
            }
        }

        public function listarOpcionesServicios(){
            if($this->model->saveServicios()){
                $this->listaServicios = $this->model->getListaServicios();

                for ($i=0; $i < count($this->listaServicios); $i++) { 
                    echo "<option value='".$this->listaServicios[$i]['idServicio']."'>".$this->listaServicios[$i]['nombreServicio']."</option>";
                }
            }
        }
    }