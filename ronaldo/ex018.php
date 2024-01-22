<?php
    include_once 'configuracao.php';
    include_once 'helpers.php';

    echo "<h1>Expressões regulares</h1>";

    $cpf1 = '123.456.789-00';

    echo "<h2>Usando o preg_replace</h2>";
    echo $limparNumero = preg_replace('/[^0-9]/',' ',$cpf1);

    echo '<hr>';

    echo "<h2>Usando uma função de validar CPF</h2>";

    $cpf2 = '144.455.106-02';

    var_dump(validarCpf($cpf2));

?>