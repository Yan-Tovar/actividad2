<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularioimc</title>
</head>
<body>
    <style>
        form{
            background-color: rgb(241, 219, 17);
            border-radius: 50px;
            line-height: normal;
            border: rgb(177, 160, 6) solid 3px;
        }
        .body{
        width: 90vw;
        padding:5px;
        margin-right: 5px;
        display: flex;
        }
        .contenedor{
            width: 50%;
            display: block;
            padding:10px;
        }
    </style>
    <form action="3formulariophp.php" method="post">
        <div class="body">
            <div class="contenedor">
                <h3>Nombre del paciente</h3>
                <h3>Peso en kilogramos</h3>
                <h3>Estatura en metros</h3>
            </div>
            <div class="contenedor">
                <br>
                <input type="text" name="nombre" style="width: 90%;"><br><br>
                <input type="number" name="peso" style="width: 90%;"><br><br>
                <input type="text" name="estatura" style="width: 90%;"><br><br>
                <input type="submit" value="Enviar" style="width: 90%;">
            </div>           
        </div>  
    </form>
</body>
</html>