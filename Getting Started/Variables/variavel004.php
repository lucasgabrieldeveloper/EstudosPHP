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
        <h2>Testando variáveis.</h2>
        <?php 
            $estouOnline = false;

            if ($estouOnline){
                echo "<p>Eu estou online.</p>";
            } else {
                echo "<p>Eu estou offline.</p>";
            }
        ?>
    </section>
</body>
</html>