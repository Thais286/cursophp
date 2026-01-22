<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <main>
    <?php
         $cotacao = 5.39; // quanto esta valendo o dolar

            // quantos reais vc tem
             $real = $_REQUEST["din"] ?? 0;

            $dolar = $real / $cotacao;
    
             $padrão = numfmt_create("pt_BR" ,   NumberFormatter::CURRENCY);

             echo "<p> Seu " . numfmt_format_currency($padrão, $real, "BRL") . " equivale a " . numfmt_format_currency($padrão, $dolar, "USD") . "</p>";


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
