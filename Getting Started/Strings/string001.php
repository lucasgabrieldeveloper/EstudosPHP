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
            $palavra = "Otorrinolaringologista";
            $frase = "Amanhã precisarei ir ao Otorrinolaringologista";
            $paragrafo = "Semana que vem, na quarta-feira, irei ao Otorrinolaringologista fazer uma consulta. Quando eu voltar, irei ao mercado e depois voltarei para casa";

            $tamanhoPalavra = strlen($palavra);
            $tamanhoFrase = strlen($frase);
            $tamanhoParagrafo = strlen($paragrafo);
        ?>
        <p>A palavra "<?= $palavra?>" possui <strong><?=$tamanhoPalavra?></strong> caracteres.</p>
        <p>A frase "<?=$frase?>" possui <strong><?=$tamanhoFrase?></strong> caracteres.</p>
        <p>O parágrafo "<?=$paragrafo?>" possui <strong><?=$tamanhoParagrafo?></strong> caracteres.</p>  
    </section>
</body>
</html>