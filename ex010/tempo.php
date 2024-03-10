<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Máquina do tempo</title>
</head>
<body>
    <?php 
    $atual = date("Y");
    $ano = $_GET['nasc'] ?? 2000;
    $idade = $_GET['idade'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano você nasceu?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=($atual - 1)?>" value="<?=$ano?>">
        <label for="idade">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
        <input type="number" name="idade" id="idade" min="1900" value="<?=$idade?>">
        <input type="submit" value="Qual será minha idade?">
    </main>
    
    <section>
        <h2>Resultado</h2>
        <?php 
        $idade_calculada = $idade - $ano;
        
        if ($idade_calculada > 0) {
            echo "<p>Quem nasceu em $ano vai ter <strong>$idade_calculada anos</strong> em $idade!</p>";
        } elseif ($idade_calculada == 0) {
            echo "<p>Você nasceu neste mesmo ano.</p>";
        } else {
            echo "<p>Você inseriu um ano futuro. Por favor, insira um ano no passado ou igual ao ano atual.</p>";
        }
        ?>
    </section>
</body>
</html>
