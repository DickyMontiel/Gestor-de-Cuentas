<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="usuarioCuenta" id="">
        <input type="email" name="correoCuenta" id="">
        <input type="tel" name="telefonoCuenta" id="">
        <input type="text" name="claveCuenta" id="">

        <select name="servicioCuenta" id="">
            <option value="0">Default</option>
            <?php $serviciosController->listarOpcionesServicios(); ?>
        </select>
        
        <button type="submit">Ingresar Cuenta</button>
    </form>
</body>
</html>