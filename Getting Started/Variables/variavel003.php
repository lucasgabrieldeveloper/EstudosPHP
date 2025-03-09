<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Bem-vindo ao meu teste PHP!</h1>
        <div class="container">
            <h2>Testando variáveis.</h2>
            <?php
                //declaração das variáveis
                $nome = "Lucas";
                $sobrenome = "Gabriel";
                $profissao = "Desenvolvedor Web";
                
                echo "<p>Olá! <br> Meu nome é $nome $sobrenome e sou $profissao.</p><br>"; //exibição
            ?>
        </div>
    </section>
</body>
</html>