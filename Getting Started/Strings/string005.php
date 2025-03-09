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
            <h2 style="display: flex; flex-direction: column; align-items: center;">Palavra invertida</h2>
            <?php
                //função mb_strrev para tratamento de caracteres com acento
                function mb_strrev($string, $encoding = 'UTF-8') {
                    $chars = mb_str_split($string, 1, $encoding);
                    return implode('', array_reverse($chars));
                }
                
                $palavra = $_GET["palavra"]; //captura da palavra inserida no formulário
                $palavraInvertida = mb_strrev($palavra); //invertendo a palavra
                echo "<p>$palavraInvertida</p>"; //exibição da palavra
            ?>
            <button onclick="javascript:window.location.href='string005.html'">&#x2B05; Voltar</button>
        </div>
    </section>
</body>
</html>