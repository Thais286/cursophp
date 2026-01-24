<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <main>
   <h1>Conversor de Moedas</h1>
    <?php  // cotação pegada da api do banco central do Brasil
         $inicio = date("m-d-Y", strtotime("-7 days")); // strptime para poder calcular a data menos 7 dias

        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true) ; // trata dados em json / true para ser um vertor false para ser objeto

        $cotação = $dados["value"][0]["cotacaoCompra"];


            // quantos reais vc tem
             $real = $_REQUEST["din"] ?? 0;

            $dolar = $real / $cotação;
    
             $padrão = numfmt_create("pt_BR" ,  NumberFormatter::CURRENCY);

             echo "<p> Seu " . numfmt_format_currency($padrão, $real, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";


            // vc também pode usar
             //echo "<p>Seus R\$ " .             number_format($real, 2, ",", ".") . 
             //    " equivalem a US\$ " . number_format($dolar, 2, ",", ".") . "</p>"; 

             //numfmt_creat significa que vai adaptarr o dinheiro conforme o pais dele
             // number format significa     formatar numero 
             // "," significa separador de decimal e o "." significa separador de milhar e o 2 significa duas casas decimais
    ?>
 </main>
<button onclick="javascript:history.go(-1)">⬅️Voltar</button>  <!-- go(-1) Volta uma página no histórico do navegador.-->

</body>
</html>
