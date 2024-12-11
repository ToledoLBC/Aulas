<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Único</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <h1>Calculadora</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$x1?>" step="0.001">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$x1?>" step="0.001">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma:</h2>
        <?php 
            $x1 = $_GET['v1'] ?? 0;
            $x2 = $_GET['v2'] ?? 0;
            echo "$x1+$x2=".$x1+$x2.".";
        ?>
    </section>
</body>
</html>