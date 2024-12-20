<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Médias</h1>
    </header>
    <main>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nume1">Número 1: </label>
            <input type="number" name="nume1" id="nume1" step="0.01" required>
            <label for="nume2">Peso: </label>
            <input type="number" name="nume2" id="nume2" step="0.01" required>
            <label for="nume3">Número 2: </label>
            <input type="number" name="nume3" id="nume3" step="0.01" required>
            <label for="nume4">Peso: </label>
            <input type="number" name="nume4" id="nume4" step="0.01" required>
            <input type="submit" value="Calcular">
        </form>
    </section>
    </main>
    <section>
        <h2>Resultado Final:</h2>
    <?php
            $x1 = $_GET["nume1"] ?? 0;
            $x3 = $_GET["nume3"] ?? 0;
            $x2 = $_GET["nume2"] ?? 1;
            $x4 = $_GET["nume4"] ?? 1;
            $x5 = ($x1 + $x3)/2; 
            $x6 = ($x1 * $x2 + $x3 * $x4)/($x2 + $x4);
            echo "A média simples é: ". number_format($x5,2,".",",") .". <br>A média ponderada é: ". number_format($x6,2,".",",");
        ?>
    </section>
</body>
</html>