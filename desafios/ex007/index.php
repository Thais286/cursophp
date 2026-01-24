<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["d1"] ?? 0;
        $divisor = $_GET["d2"] ?? 1; // para dividir por 1 se colocar 0 vai dividir por 0 e todo múmero dividido por 0 é 0
       ;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?=  $dividendo; ?>"> 
            
            <!-- = é a forma curta do echo em PHP, isso aqui: <?= $dividendo; ?> é exatamente a mesma coisa que:<?php echo $dividendo; ?> -->

            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?= $divisor; ?>">

            <input type="submit" value="Analisar">
        </form>

        <section>
            <h2>Estrutura da divisão</h2>
            <?php 
                // calculo
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;
            ?>

            <table class="divisao">
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>
                <tr>
                    <td><?= $quociente ?></td>
                    <td><?= $resto ?></td>
                </tr>
            </table>

        </section>
    </main>
</body>
</html>