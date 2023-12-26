<?php
    function saudacao ()
    {
        return 'Boa tarde';
    }

    $texto = 'Texto para resumir vindo de uma variável';
    $a = 54;
    // Dentro de "()" chama-se parâmetro ou argumento
    function resumirTexto ($texto, float $limite, string $continue = '...')
    {
       return $texto;
    }
    echo resumirTexto($texto, $a);
?>