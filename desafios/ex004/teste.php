<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas BCB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <pre>
        <?php

        $inicio = date("m-d-Y", strtotime("-7 days")); // strptime para poder calcular a data menos 7 dias

        $fim = date("m-d-Y");

          $url = 'http://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true) ; // trata dados em json / true para ser um vertor false para ser objeto

        $cotação = $dados['value'][0]['cotacaoCompra'];


        echo " A cotação foi $cotação"; 
        ?>
    </pre>
</body>
</html>