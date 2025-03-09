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
        <div class="container">
            <h2>Testando variáveis.</h2>
            <?php
                //declaração das variáveis
                $num_1 = 10;
                $num_2 = 20;

                //exibição dos resultados
                echo "<p>Quanto é $num_1 mais $num_2?</p>";
                echo "<p>O resultado da soma de $num_1 + $num_2 é " . ($num_1 + $num_2) . ".</p><br>";
                echo "<p>Quanto é $num_2 menos $num_1?</p>";
                echo "<p>O resultado da subtração de $num_2 - $num_1 é " . ($num_2 - $num_1) . ".</p><br>";
                echo "<p>Quanto é $num_1 vezes $num_2?</p>";
                echo "<p>O resultado do produto entre $num_1 * $num_2 é " . ($num_1 * $num_2) . ".</p><br>";
                echo "<p>Quanto é $num_2 dividido por $num_1?</p>";
                echo "<p>O resultado do quociente de $num_2 / $num_1 é " . number_format($num_2 / $num_1,   2) . ".</p><br>";
            ?>
        </div>
    </section>
</body>
</html>