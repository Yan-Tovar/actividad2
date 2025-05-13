<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioSalario</title>
</head>
<body>
    <?php
    $comision= 50000;
    $salario=737000;
    $salariofinal= $salario + ($comision*$_REQUEST['cantidad']+(($_REQUEST['precio']*5)/100));
    echo "El salario final para ".$_REQUEST['nombre']." es de: ".$salariofinal;
    ?>
</body>
</html>