<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damas</title>
</head>

<style>
    body {
        background-image: url(./images/gambito2.jpg);
        background-size: contain;

    }

    div {

        margin-left: 400px;
        margin-top: 30px;
        margin-bottom: 50px;

    }

    .titulo{
        margin-left: 80px;
        font-size: 40px;
        color: beige;

        
    }
</style>

<body>

    <div class="titulo">        
        <h1> JUEGO DE DAMAS</h1>

    </div>



    <div>

        <?php

        function tableroD()
        {
            echo "<table border='30'>";
            for ($fila = 0; $fila < 8; $fila++) {
                echo "<tr>";
                for ($columna = 0; $columna < 8; $columna++) {
                    $color = ($fila + $columna) % 2 == 0 ? "brown" : "black";

                    if ($fila == 3) {
                        $color = "green";
                    }
                    echo "<td width='75' height='75' style='background: $color'>";

                    if ($color == "black" && $fila <= 2) {
                        echo "<div style='width: 50px; height: 50px; background-image: url(./images/yo.jpg); background-size: 60px; border-radius: 50%; margin: auto;'></div>";
                    }

                    if ($color == "black" && $fila >= 5) {
                        echo "<div style='width: 50px; height: 50px; background-image: url(./images/profile.png); background-size: 50px; border-radius: 50%; margin: auto;'></div>";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        tableroD();

        ?>



    </div>

</body>

</html>