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

            $this->model->insertData($this->nombreServicio, $this->linkServicio);
        }
    }