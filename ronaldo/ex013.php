<?php
    include_once 'helpers.php';
    include_once 'configuracao.php';


    echo "<h1>Introdução aos arrays</h1>";
    echo "<br>";
    echo $_SERVER ['SCRIPT_FILENAME'];
    echo "<hr>";

    echo "<h2>Criando arrays</h2>";
    echo "<ul>";
        echo "<li>Primeiro modo de criar</li>";
        #Usando a função array
        $meses1 = array('Dezembro');
        var_dump($meses1);
        
        echo "<hr>";

        echo "<li>Segundo modo de criar</li>";
        #Usando colchetes
        $meses2 = [
            'Janeiro',
            'Fevereiro',
            'Março'
        ];
        // 0 é a primeira posição
        // 1 é a segunda posição
        // 2 é a terceira posição...
        var_dump($meses2);
    echo "</ul>";

    echo "<h2>Colocando índices nos arrays</h2>";

    $numeros = [
        'p' => 'um',
        1 => 'dois',
        'três'
    ];
    var_dump($numeros);

    echo "<h2>Acessando o array criado</h2>";

    echo $numeros [2];

    echo "<h2>Percorrendo o array inteiro</h2>";

    foreach ($numeros as $chave => $valor){
        echo $valor.' da posição ['.$chave.']<br>';
    }

    echo "<h2>Usando uma função com array</h2>";

    echo dataAtual();
?>