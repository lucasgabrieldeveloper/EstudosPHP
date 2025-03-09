<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Bem-vindo ao meu teste PHP!</h1>
        <div class="container">
            <h2>Teste de String.</h2>
            <?php
                //declaração das variáveis
                $mensagem = "Hoje eu estou muito triste.";
                $novaMensagem = str_replace("triste", "feliz", $mensagem);
                
                //mensagem e nova mensagem
                echo "<p>$mensagem</p>";
                echo "<p>Mensagem com palavra substituída\u{1F53D}</p>";
                echo "<p>$novaMensagem</p>";
            ?>
        </div>
    </section>
</body>
</html>