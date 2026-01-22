<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           //var_dump($_GET); vai  mostrar tudo oq esta dentro do get as configurações dele usa ela pq ela foi usada no html

           $n = $_GET["nome"] ?? "sen nome"; // n de nome esse ?? "sem nome" significa que se a pessoa não digitar o nome vai aparecer isso o mesmo vale para o sobrenome
           $s = $_GET["sobrenome"] ?? "sem sobrenome"; // s de sobrenome 
           echo "<p> é um prezer te conhecer ,<strong> $n $s </strong>! Este é o meu site!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>