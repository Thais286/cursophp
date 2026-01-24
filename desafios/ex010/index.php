<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $peso1 = $_GET['p1'] ?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $peso2 = $_GET['p2'] ?? 1;
    ?>

  <main>
    <h1>Calculando médias aritméticas</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="v1">1º Valor :</label>
      <input type="number" name="v1" id="v1"required value="<?= $valor1 ?>"> <!-- required = o formulário não envia se o campo estiver vazio igual o ??-->

      <label for="p1">1º Peso:</label>
      <input type="number" name="p1" id="p1" min="1" required value="<?= $peso1 ?>">

      <label for="v2">2º Valor:</label>
      <input type="number" name="v2" id="v2" required value="<?= $valor2 ?>">

      <label for="p2">2º Peso:</label>
      <input type="number" name="p2" id="p2" min="1" required value="<?= $peso2 ?>">

      <input type="submit" value="Calcular média">
    </form>
  </main>  

  <section>
    <?php 
       $ma = ($valor1 + $valor2) / 2; // média aritmética
       $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2); // média ponderada
    ?>

    <h2>Calculo das médias</h2>
    <p>Analisando os valores <?= $valor1 ?> e <?= $valor2 ?>:</p>

    <ul>
        <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= $ma ?>.</li>
        <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso1 ?> e <?= $peso2 ?> é igual a <?= $mp ?>.</li>
    </ul>
    
  </section>
</body>
</html>