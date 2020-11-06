<?php
    require "app/view/ServiciosView.php";
    require "app/controller/ServiciosController.php";

    if(isset($_POST['nombre']) and isset($_POST['link'])){
        $controlador = new ServiciosController;

        $controlador->prepareData($_POST['nombre'], $_POST['link']);
    }