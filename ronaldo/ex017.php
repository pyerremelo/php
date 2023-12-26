<?php
    declare(strict_types=1);
    //Pode-se declarar qual o tipo de retorno que e espera.
    //Basta colocar ":" logo após os "()" de parâmetros
    // e o tipo de retono que se espera.
    //Veja este exemplo abaixo
    function saudacao (): string
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
    echo '<hr>';
    echo saudacao();
?>