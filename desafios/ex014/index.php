<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            width: 100px;
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual o valor você deseja sacar? (R$)<sup>*</sup></label><!-- sup * /sup para deixar o * elevado -->
            <input type="number" name="saque" id="saque"  step="5" required value="<?$saque ?>"> <!-- step 5 para sacar só multiplos de 5-->
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
     $resto = $saque;

     //saqque de R$ 100
     $tot100 = floor($resto / 100); //floor  arredonda um número para baixo, sempre para o menor inteiro mais próximo.
     $resto %= 100;

     //saque de R$ 50
     $tot50 = floor($resto / 50);
     $resto %= 50;

     //saque de R$ 10
     $tot10 = floor($resto / 10);
     $resto %= 10;

     //saque de R$ 5
     $tot5 = floor($resto / 5);
     $resto %= 5;
    ?>
    <section>
        <h2>Sacar de R$<?=number_format($saque, 2, ',', '.') ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li> <img src="imagens/100-reais.jpg" alt="nota de 100 reais" class="nota">x<?= $tot100 ?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50 reais" class="nota"> x<?= $tot50 ?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10 reais" class="nota"> x<?= $tot10 ?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5 reais" class="nota"> x<?= $tot5 ?></li>
        </ul>
    </section>
</body>
</html>