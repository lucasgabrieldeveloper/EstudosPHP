<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Bem-vindo ao meu teste PHP!</h1>
        <h2>Testando variáveis.</h2>
        <?php 
            //criação das variáveis
            $nome = "Lucas Gabriel";
            $idade = "21";
            $cidade = "São Luís MA";
            
            //impressão das variáveis
            echo "<p>Olá! Eu me chamo $nome, tenho $idade anos e moro em $cidade.</p>";
        ?>
    </section>
</body>
</html>