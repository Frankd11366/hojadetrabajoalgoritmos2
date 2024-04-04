<?php


$palabras = array(
    " Desnuda ",
    " que no ",
    " habrá ",
    " diseño ",
    " que te ",
    " quede mejor ",
    " que el ",
    " de tu piel ",
    " ajustada ",
    " a tu figura"
);

function generarGradas($pisos, $palabras)
{
    echo "<table border='15'>";
    for ($i = 1; $i <= $pisos; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $i; $j++) {

            echo "<td>{$palabras[$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradas a Nivel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-image: url(./images/blanco.jpg);
        text-align: center;
        font-family: "Bebas Neue";
        font-size: 30px;
    }

    div {
        margin-left: 200px;
        font-size: 40px;
        font-family: "Bebas Neue";
    }

    input{
        font-size: 40px;
    }
    
    .conc{
        font-size: 40px;
        color: orangered;

    }

</style>

<body>
    <h1>Generador de Gradas</h1>
    <form method="post" action="">
        <label for="pisos">Ingrese el número de pisos para las gradas (1-10):</label><br><br>
        <input type="number" id="pisos" name="pisos" min="1" max="10" required><br><br>
        <input class="conc" type="submit" value="Generar Gradas"><br><br>
    </form>

    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numPisos = $_POST["pisos"];
            $palabrasMostradas = array_slice($palabras, 0, $numPisos);
            generarGradas($numPisos, $palabrasMostradas);
        }
        ?>
    </div>

    <br><br><br><br><br>
</body>

</html>