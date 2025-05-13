<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioSalario</title>
</head>
<body>
    <style>
        form{
            background-color: rgb(254,82,42);
            border-radius: 50px;
            line-height: normal;
            border:rgb(224, 41, 0) solid 3px;
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
    <form action="2formulariophp.php" method="post">
        <div class="body">
            <div class="contenedor">
                <h3>Nombre del Vendedor</h3>
                <h3>Cantiad de automoviles vendidos</h3>
                <h3>Precio total automoviles vendidos</h3>
            </div>
            <div class="contenedor">
                <br>
                <input type="text" min="1" max="5" name="nombre" style="width: 90%;"><br><br>
                <input type="number" min="1" name="cantidad" style="width: 90%;"><br><br>
                <input type="number" name="precio" style="width: 90%;"><br><br>
                <input type="submit" value="Enviar" style="width: 90%;">
            </div>           
        </div>  
    </form>
</body>
</html>