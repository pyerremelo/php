<?php
    include_once 'configuracao.php';
    include_once 'helpers.php';

    echo "<h1>Estruturas de repetição</h1>";

    $numero = 1;
    echo "<h2>While</h2>";
    while ($numero <= 10){
        echo ' '.$numero ++;
    }

    echo "<h2>For</h2>";
    for ($i = 10; $i >= 1; $i--) {
        echo ' '.$i;
    }
    
    echo "<h2>Vendo se o número é par</h2>";
    
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i.' é par <br>';
        }
        else {
            echo $i.' é ímpar <br>';
        }
    }
    
    echo "<h2>Fazendo uma tabuada com while</h2>";
    $num = 0;
    while ($num <= 10){
        echo "10 x ".$num." = ".$num * 10 . '<br>';
        $num++;
    }

    

?>