<?php 

$quantidadeProdutos = 10;
$precoUnitario = 19.99;

$valorTotal = $precoUnitario * $quantidadeProdutos;

echo "O valor total é R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";

?>