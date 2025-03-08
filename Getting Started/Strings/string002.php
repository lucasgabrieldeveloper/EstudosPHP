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
        <h2>Testando Strings.</h2>
        <?php 
            $txt = <<<TEXT
                O cachorro correu pelo parque, feliz como nunca antes. Ele adorava correr pelo parque, sentir a grama molhada e explorar novos caminhos. Todos os dias, o cachorro ia até o parque para brincar, correr e se divertir. O parque era o lugar favorito dele, onde se sentia livre e cheio de energia.
TEXT;
            $quantidadePalavra = substr_count($txt, "parque");

            echo "<p>$txt</p>";
            echo "<p>A palavra 'parque' se repete <strong>$quantidadePalavra</strong> vezes no texto acima.</p>";
        ?>
    </section>
</body>
</html>