<?php
    include_once 'helpers.php';

    echo "<h1>Testando a função de resumir o texto</h1>";

    $texto = " <h1>texto</h1> <p>para</p> resumir ";
    // $texto = strip_tags($texto);
    echo resumirTexto($texto,15);
    
?>