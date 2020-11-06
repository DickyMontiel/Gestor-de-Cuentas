<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="cuentas.php">
        <button type="submit">Regresar</button>
    </a>
    <form method="post">
        <textarea name="informacion" style="width:100%; height: 300px;"></textarea>
        <button type="submit">Enviar</button>
    </form>

    <?php $controlador->listarAdicionales($_GET['cuenta']); ?>
</body>
</html>