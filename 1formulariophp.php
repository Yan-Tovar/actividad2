<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioNotas</title>
</head>
<body>
    <?php
    $sumaParcial=((($_REQUEST['parcial1']+$_REQUEST['parcial2']+$_REQUEST['parcial3'])/3)*35)/100;
    $examenfinal=($_REQUEST['examenfinal']*35)/100;
    $trabajofinal=($_REQUEST['trabajofinal'])*30/100;
    $notafinal=$sumaParcial+$examenfinal+$trabajofinal;
    if($notafinal>=3){
        echo "Aprobó<br>";
        echo "Su nota final es: ".$notafinal."<br>";
    }else{
        echo "No aprobó<br>";
        echo "Su nota final es: ".$notafinal."<br>";
    }
    ?>
</body>
</html>