<?php
    include_once 'helpers.php';

    echo "<h1>Operador ternário</h1>";

    $valor = 12;
    echo "<H4>Imprimindo valor com if e else<H4>";
    if ($valor) {
        echo $valor;
    } else {
        echo 0;
    }

    echo "<BR>";

    echo "<H4>Imprimindo valor com operador ternário<H4>";
    # É a mesma coisa de se usar o IF e ELSE
    // Se o $valor existir ele receberá (?) $valor 
    //senão ele receberá (:) 0 
    echo ($valor ? $valor : 0);
    #OBS: Os parênteses são opcionais

    echo "<BR>";

    echo "<H4>Imprimindo valor com <u>operador ternário</u> de forma ainda mais resumida<H4>";
    echo ($valor ? : 0);

    echo "<H4>Função que formata os números<H4>";
    echo "R\$ ".formatarValor(5_000_000);
?>