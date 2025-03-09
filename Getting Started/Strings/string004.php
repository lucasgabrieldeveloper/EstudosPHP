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
        <div class="container">
            <h2>Testando String.</h2>
            <?php        
            $txt = "Eu estou aprendendo PHP!"; //declaração da variável

            echo "<p>$txt</p>";
            //exibição do texto em letra maiúscula      
            echo "<p><strong><em>maiúscula</em></strong> \u{27A1} " . strtoupper($txt) . "</p>";    
            //exibição do texto em letra minúscula      
            echo "<p><strong><em>minúscula</em></strong> \u{27A1} " . strtolower($txt) . "</p>";
            ?>
        </div>
    </section>
</body>
</html>