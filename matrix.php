<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<style>

    body{
        background-image: url(./images/matrix.jpg);
    }
    .hhhppphhh {
        text-align: center;
        align-items: center;
        font-family: "Anton", sans-serif;
        color: darkblue;
        font-size: 25px;
    }

    .ppphhhppp {
        margin-left: 550px;
        font-family: "Anton", sans-serif;
        color: darkblue;
        font-size: 25px;

    }

    input{
        font-family: "Anton", sans-serif;
        font-size: 30px;
        color: grey;
        
    }

    
</style>

<body>
    <div class="hhhppphhh">

        <h1>Matrix</h1>
        <form method="post" action="">
            <label for="filas">Ingrese el número de filas:</label><br>
            <input type="number" id="filas" name="filas" min="1" required><br><br>
            <label for="columnas">Ingrese el número de columnas:</label><br>
            <input type="number" id="columnas" name="columnas" min="1" required><br><br>
            <input type="submit" value="Generar Matrix">
        </form>

    </div>


    <div class="ppphhhppp">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numFilas = $_POST["filas"];
            $numColumnas = $_POST["columnas"];
            $resultado = imprimirMatriz($numFilas, $numColumnas);
            echo "<p>La suma de todos los números en la matriz es: $resultado</p>";
        }

        function imprimirMatriz($filas, $columnas)
        {
            echo "<h3>Matriz Generada:</h3>";
            echo "<table border='15'>";
            $valor = 1;
            $suma = 0;
            for ($i = 0; $i < $filas; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columnas; $j++) {
                    echo "<td>$valor</td>";
                    $suma += $valor;
                    $valor++;
                }
                echo "</tr>";
            }
            echo "</table>";
            return $suma;
        }
        ?>

    </div>
</body>

</html>