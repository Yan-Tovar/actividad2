<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioNotas</title>
</head>
<body>
    <style>
        form{
            background-color: rgb(31,45,186);
            border-radius: 50px;
            line-height: normal;
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
    <form action="1formulariophp.php" method="post">
        <div class="body">
            <div class="contenedor">
                <h3>Parcial 1</h3>
                <h3>Parcial 2</h3>
                <h3>Parcial 3</h3>
                <h3>Examen Final</h3>
                <h3>Trabajo Final</h3>
            </div>
            <div class="contenedor">
                <br>
                <input type="number" min="1" max="5" step="0.01" name="parcial1" style="width: 90%;"><br><br>
                <input type="number" min="1" max="5" step="0.01" name="parcial2" style="width: 90%;"><br><br>
                <input type="number" min="1" max="5" step="0.01" name="parcial3" style="width: 90%;"><br><br>
                <input type="number" min="1" max="5" step="0.01" name="examenfinal" style="width: 90%;"><br><br>
                <input type="number" min="1" max="5" step="0.01" name="trabajofinal" style="width: 90%;"><br><br><br>
                <input type="submit" value="Enviar" style="width: 90%;">
            </div>           
        </div>  
    </form>
</body>
</html>