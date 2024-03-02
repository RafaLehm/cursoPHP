<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de números</title>
</head>
<body>
<main>
    <h1><strong>Trabalhando com números aleatórios</strong></h1>
    <?php
    $min = 0;
    $max = 100;
    
    $num = mt_rand($min, $max);

    echo "Gerando um número aleatório entre $min e $max...<br>";
    echo "O número gerado foi <strong>$num</strong>";
    ?>
    <button onclick="window.location.reload();">Gerar outro &#128260;</button>
</main>
</body>
</html>