<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERGLOBAIS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
      <pre> <!-- Mostre o texto exatamente como ele foi escrito,com espaços, tabulações e quebras de linha.”-->
        <?php 
                // RESUMO
                // 🔹 GET → URL
                //🔹 POST → Inspecionar (Network)
                //🔹 REQUEST → mistura (evitar)
                //🔹 COOKIE → navegador
                //🔹 SESSION → servidor
                //🔹 FILES → upload
                //🔹 SERVER → info do servidor
                //🔹 ENV → sistema
                //🔹 GLOBALS → variáveis globais
                

            //setcookie é uma função do PHP usada para criar ou alterar um cookie, salvar um pequeno dado no navegador do usuário.  
            setcookie("dia-da-semana", "SEGUNDA", time() + 3600); // 3600 pq 1h tem 3600s   

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!"; //é a função que inicia ou continua uma sessão no PHP. ssem ela o php não cansegue acessar $_session

            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET); // aparece os dados do usuario na url "link"

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST); // aparece também os dados ,mas em inspencionar

            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST); // mistura os dados de get e post ,mas ele não é muito recomendado justamente por não deixar claro de onde o dado veio

            echo "<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION); // dados persistentes enquanto a sessão existir ,Dados salvos no servidor durante a navegação , pega as variáveisw de sessão que são variáveis que não são perdidas em navegação de páginas

            echo "<h1>Superglobal FILES</h1>";
            var_dump($_FILES); // mostra info do arquivo enviado , Usada para upload de arquivos

            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER); // dados do servidor, script, navegador etc ,Informações do servidor e da requisição

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV); // depende da configuração do servidor , Variáveis de ambiente do sistema


            // =======================================
            // SUPERGLOBAL $GLOBALS
            // Acessa variáveis globais dentro de funções
            // =======================================
            
            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS); // mostra TODAS as variáveis globais           

        ?>
      </pre>
    </main>
</body>
</html>