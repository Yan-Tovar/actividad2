<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioCredito</title>
</head>
<body>
    <style>
        table{
            border: black solid 1px;
        }
        td{
            border: black solid 1px
        }
        th{
            border: black solid 1px;
        }
    </style>
    <?php
    $valortasainteres= $_REQUEST['interes']/100;
    $monto = $_REQUEST['monto'];
    $plazomeses= $_REQUEST['plazo'];
    $cuotafija= round($monto*($valortasainteres*(1+$valortasainteres)**$plazomeses)/((1+$valortasainteres)**$plazomeses - 1),2);
    echo "Cédula ".$_REQUEST['cedula']."<br>";
    echo "Nombre ".$_REQUEST['nombre']."<br>";
    ?>
    <table>
        <tr>
            <th>N° Cuota</th>
            <th>Saldo anterior</th>
            <th>Valor Cuota fija</th>
            <th>Abono interes</th>
            <th>Abono capital</th>
            <th>Nuevo saldo</th>
        </tr>
        <?php
        $contador=0;
        $saldoanterior = $monto;
        while ($contador<$plazomeses) {
            $abonointeres = round(($saldoanterior * $valortasainteres));
            $abonocapital = round(($cuotafija - $abonointeres));
            $nuevosaldo = round(($saldoanterior - $abonocapital));
            $contador++;
            echo "
            <tr>
                <td>{$contador}</td>
                <td>{$saldoanterior}</td>
                <td>{$cuotafija}</td>
                <td>{$abonointeres}</td>
                <td>{$abonocapital}</td>
                <td>{$nuevosaldo}</td>
            </tr>";
            $saldoanterior= round(($saldoanterior - $cuotafija + $abonointeres),2);
        }
        echo $valortasainteres;
    ?>
    </table>
    
</body>
</html>