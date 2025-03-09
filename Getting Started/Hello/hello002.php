<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Bem-vindo ao meu teste de PHP!</h1>
        <div class="container">
            <h2>Testando comando "echo".</h2>
            <?php        
                echo "<p>\"Nunca é tarde para aprender PHP!\".</p>"; //primeira impressão         
                echo "<p>A data de hoje é: " . date(format: 'd-m-Y') . ".</p>"; //data          
                echo "<p>O resultado de 20 ÷ 5 é " . (20 / 5) . ".</p>"; //resultado da divisão
            ?>
        </div>
    </section>
</body>
</html>