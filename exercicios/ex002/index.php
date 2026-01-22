<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
   <h1>Exemplo de php</h1> 
   <?php 
   date_default_timezone_set('America/Sao_Paulo'); // fuso horário UTC−3
   echo "Hoje édia". date("d/M/Y"); // dia ,mês e ano , D maiusculo significa dia da semana
   echo " e  a hora atual é ". date("G:i:s T"); // G hora , i minuto , s segundo , : separador , T fuso horario
   ?>
</body>
</html>