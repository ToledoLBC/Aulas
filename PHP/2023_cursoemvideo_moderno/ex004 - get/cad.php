<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado dos dados</h1>
    </header>
    <main>
    <?php
            $nome = $_GET["nome"] ?? "sem nome";
            $snom = $_GET["snom"] ?? "sem snome";
            echo "$nome $snom";
        ?>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>