<!DOCTYPE html>
<html lang="pr-br">
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
                $estouOnline = false; //declaração da variável

                //comando if/else
                if ($estouOnline){
                    echo "<p>Eu estou online.</p>";
                } else {
                    echo "<p>Eu estou offline.</p>";
                }
            ?>
        </div>
    </section>
</body>
</html>