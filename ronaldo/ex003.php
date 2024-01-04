<?php
    declare(strict_types=1);
    // Impede qu o php converta automáticamente os valores.
    // Assim somente retorna correto caso for o que se espera.


    //Pode-se declarar qual o tipo de retorno que e espera.
    //Basta colocar ":" logo após os "()" de parâmetros
    // e o tipo de retono que se espera.
    //Veja este exemplo abaixo

    echo "<h1>Definindo o tipo de retorno que se espera nas funções</h1>";

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