<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sálario mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_621.00;
        $salario = $_GET['sal'] ?? 0;
    ?>

    <main>
        <h1> Informe seu Sálario </h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário:(R$)
            </label>
            <input type="number" name="sal" id="sal" value="<?= $salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong> R$<?= number_format($minimo, 2, ',', '.') ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
    <?php 
      $tot = intdiv($salario, $minimo); // intdiv Divide dois números e retorna APENAS a parte inteira do resultado ignora o resto, não arredonda
      
      $dif = $salario % $minimo; // dif = diferença

      echo "<p>Quem recebe um salário de R\$".number_format($salario, 2, ',', '.')." ganha $tot salários mínimos + R\$ ".number_format($dif, 2, ',', '.').".</p>";
    ?>
    </section>
</body>
</html>