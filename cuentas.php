<?php
    require "app/bin/Conexion.php";
    require "app/controller/CuentasController.php";
    require "app/controller/ServiciosController.php";

    $controlador = new CuentasController;
    $serviciosController = new ServiciosController;

    require "app/view/CuentasView.php";

    if(
        isset($_POST['usuarioCuenta']) and 
        isset($_POST['correoCuenta']) and 
        isset($_POST['telefonoCuenta']) and 
        isset($_POST['claveCuenta']) and 
        isset($_POST['servicioCuenta'])
    ){
        $controlador->prepareData(
            $_POST['usuarioCuenta'], 
            $_POST['correoCuenta'],
            $_POST['telefonoCuenta'],
            $_POST['claveCuenta'],
            $_POST['servicioCuenta']
        );
    }
