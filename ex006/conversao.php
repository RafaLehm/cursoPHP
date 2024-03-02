<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>convertendo moeda</title>
</head>
<body>
  <main>
    <h1>Conversor de Moedas</h1>
    <?php 
    $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-23-2024\'&@dataFinalCotacao=\'03-01-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), true);
    $cotação = $dados["value"][0]["cotacaoCompra"];
    $real = $_REQUEST["din"] ?? 0;
    $dolar = $real / $cotação;
    
    echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
    
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>


