<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustaador de preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 0;
        $reaj = $_GET['reaj'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$)</label>
            <input type="nu,mber" name="preco" id="preco" min="10" step="0.01" value="<?= $preco ?> ">

            <label for="reaj">Qual será o percentual do reajuste?(<span id="p" style="font-weight: bold; color: black;"><?= $reaj  ?></span>%)</label> <!-- reaj de reajuste e p de porcentagem-->

            <input type="range" name="reaj" id="reaj" min="0" max="100"  step="1" oninput="mudaValor()" value="<?= $reaj ?>"> <!-- range é essa linha 👉 ─────●─────  que vc pode mover e colocar os valores-->

            <input type="submit" value="Reajustar">

        </form>
    </main>

    <?php 
       $aumento = $preco * $reaj /100;
       $novo = $preco + $aumento;

    ?>

    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava R$ <?= number_format($preco, 2, ",", ".")?>, com <strong> <?= $reaj ?>% de aumento</strong>, passará a custar <strong>R$ <?= number_format($novo, 2, ",", ".") ?>.</strong> a partir de agora.</p>
    </section>

    <script> // Declarações automáticas
        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>