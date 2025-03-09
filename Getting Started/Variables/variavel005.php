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
        <div class="container">
            <h2>Testando variáveis.</h2>
            <?php
                //declaração das variáveis
                $quantidadeProdutos = 10;
                $precoUnitario = 19.99;
                
                $valorTotal = $precoUnitario * $quantidadeProdutos; //fórmula
                
                echo "<p>O valor total é R$ " . number_format($valorTotal, 2, ',', '.') . ".</p><br>"; //exibição
            ?>
        </div>
    </section>
</body>
</html>