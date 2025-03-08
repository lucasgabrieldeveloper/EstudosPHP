<?php 
    //criação das variáveis
    $num_1 = 10;
    $num_2 = 20;

    //exibição dos resultados
    echo "Quanto é $num_1 mais $num_2?<br>";
    echo "O resultado da soma de $num_1 + $num_2 é " . ($num_1 + $num_2) . "<br><br>";

    echo "Quanto é $num_2 menos $num_1?<br>";
    echo "O resultado da subtração de $num_2 - $num_1 é " . ($num_2 - $num_1) . "<br><br>";

    echo "Quanto é $num_1 vezes $num_2?<br>";
    echo "O resultado do produto entre $num_1 * $num_2 é " . ($num_1 * $num_2) . "<br><br>";

    echo "Quanto é $num_2 dividido por $num_1?<br>";
    echo "O resultado do quociente de $num_2 / $num_1 é " . number_format($num_2 / $num_1, 2) . "<br><br>";

?>