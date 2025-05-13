<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularioimc</title>
</head>
<body>
    <?php
    $imc=$_REQUEST['peso'] / ($_REQUEST['estatura']*$_REQUEST['estatura']);
    switch($imc){
        case $imc <18.5:
            echo $_REQUEST['nombre']." tiene un IMC de ".$imc." (Por debajo del peso)";
            break;
        case $imc >18.5 and $imc <24.9:
            echo $_REQUEST['nombre']." tiene un IMC de ".$imc." (Saludable)";
            break;
        case $imc >25.0 and $imc <29.9:
            echo $_REQUEST['nombre']." tiene un IMC de ".$imc." (Con sobrepeso)";
            break;
        case $imc >30.0 and $imc <39.9:
            echo $_REQUEST['nombre']." tiene un IMC de ".$imc." (Obeso)";
            break;
        case $imc >40.0:
            echo $_REQUEST['nombre']." tiene un IMC de ".$imc." (Obesidad Mórbida)";
            break;
    }
    ?>
</body>
</html>