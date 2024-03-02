<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
       // verifica se o valor foi enviado pelo formulário
       if(isset($_POST['calc'])) {
        
        // obtém o número enviado pelo formulário 
        $numero = intval($_POST['calc']);

        // verifica se o número é igual a zero ou se é uma string vazia
        if($numero == 0 || $_POST['calc'] === '') {
            echo "<p>Nenhum número foi enviado!</p>";
        } else {
            // Caso contrário, continua com o processamento normal

            // Cria uma lista com o número, seu antecessor e seu sucessor
            $lista = array($numero, $numero - 1, $numero + 1);

            // Usa as funções min() e max() para encontrar o antecessor e o sucessor
            $antecessor = min($lista);
            $sucessor = max($lista);

            // Exibe os resultados 
            echo "<p>O número escolhido foi <strong>$numero</strong>.</p>";
            echo "<p>O seu <em>antecessor</em> é <strong>$antecessor</strong>.</p>";
            echo "<p>O seu <em>sucessor</em> é <strong>$sucessor</strong>.</p>";
        }
       }
       else {
        // Se nenhum valor foi enviado pelo formulário, exibe uma mensagem de erro
        echo "<p>Nenhum número foi enviado.</p>";
       }
        ?>
    <form action="index.html">
        <input type="submit" value="&#129190 Voltar">
        </form>
    </main>
</body>
</html>
