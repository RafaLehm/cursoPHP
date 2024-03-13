<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>caixa eletrônico</title>
    <style>
        img.nota {
           height: 50px; 
           margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name = saque id = saque step='5' required value="<?=$saque?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
    </form>
    </main>
    <?php 
        $resto = $saque;
        // saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;
        
        // saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        // saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;

        // saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, "," , ".")?> realizado</h2>
        <p>O caixa eletrônica vai ter entregar as seguintes notas:</p>
        <ul>
            <li><img src="100-reais.jpg" alt="nota de 100" class="nota"> x <strong><?=$tot100?></strong></li>
            <li><img src="50-reais.jpg" alt="nota de 50" class="nota"> x <strong><?=$tot50?></strong></li>
            <li><img src="10-reais.jpg" alt="nota de 10" class="nota"> x <strong><?=$tot10?></strong></li>
            <li><img src="5-reais.jpg" alt="nota de 5" class="nota"> x <strong><?=$tot5?></strong></li>
        </ul>
    </section>
    
</body>
</html>