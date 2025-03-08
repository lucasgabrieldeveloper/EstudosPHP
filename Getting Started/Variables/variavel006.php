<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varável</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Bem-vindo ao meu teste PHP!</h1>
        <h2>Testando variável constante.</h2>
        <?php 
            const PI = M_PI;
            echo "<p>O valor de Pi é " . number_format(PI, 2, ",", ".") . ".</p>";
        ?>
    </section>
</body>
</html>