<?php
    require "app/bin/Conexion.php";
    require "app/controller/AdicionalesController.php";
    
    $controlador = new AdicionalesController;

    if(isset($_GET['cuenta'])){
        if(isset($_POST['informacion'])){
            $controlador->prepareData($_GET['cuenta'], $_POST['informacion']);
        }
    }else{
        header("Location: cuentas.php");
    }

    require "app/view/AdicionalesView.php";
    