<?php

    echo "<h1>Função com texto vindo de uma variável</h1>";

    $texto = 'Texto para resumir vindo de uma variável';
    $a = 54;
    // Dentro de "()" chama-se parâmetro ou argumento
    function resumirTexto ($texto, float $limite, string $continue = '...')
    {
       return $texto;
    }
    echo resumirTexto($texto, $a);
?>