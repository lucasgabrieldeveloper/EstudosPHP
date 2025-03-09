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
                echo "<p>A soma de 5 + 3 é " . (5 + 3) . ".</p>"; //impressão da soma(+)           
                echo "<p>O produto de 6 * 2 é " . (6 * 2) . ".</p>"; //impressão do produto(*)
            ?>
        </div>
    </section>
</body>
</html>