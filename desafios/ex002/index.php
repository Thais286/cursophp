<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros aleatorios</title>]
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max); //Gera um número aleatório  mais rápido e tem a opção random_int() que gera números criptograficamente seguros mais lento

        echo ("<p> Gerando números aleatórios entre $min e $max... <br> O valor gerado foi <strong>$num</strong></p>");
        ?>
        <button onclick="javascript:document.location.reload()">🔂Gerar outro</button>
    </main>
</body>
</html>