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
        <h2>Testando variáveis.</h2>
        <?php 
            //criação das variáveis
            $nome = "Lucas";
            $sobrenome = "Gabriel";
            $profissao = "Desenvolvedor Web";

            //exibição
            echo "<p>Olá! <br> Meu nome é $nome $sobrenome e sou $profissao.</p><br>";
        ?>
    </section>
</body>
</html>