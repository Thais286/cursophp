<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da maldição</title>
    <!--Acesse pelo navegador (igual o Guanabara)
    o index e aparecer oq tem na sua pasta do curso de php

    No navegador, digite: http://localhost/cursophp/  --->
</head>
<body>
    <h1>
        <?php 
        echo "Olá, mundo! \u{1F30E}";
        ?>
     <!-- pode usar echo ou print mesma coisa
          \u(1F30E) é para colocar o emoji do mundo dentro do \u(🌍) igual o windows + . 
          vc pega esse codigo no emojipedia -->
    </h1>
    <p>Vamos tentar nos livrar da maldição.</p>
</body>
</html>