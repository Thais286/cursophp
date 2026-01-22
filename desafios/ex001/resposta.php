<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desáfio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
            $n = $_REQUEST["num"] ?? 0; // o _REQUEST vc pode usar no lugar de get
            $a = $n - 1;
            $s = $n + 1;
            echo " O número escolhido foi <strong>$n</strong>";
            echo "<br>  seu antecessor é $a";
            echo "<br>  seu sucessor é $s";

            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">⬅️voltar</button>
    </main>
</body>
</html>