<?php 
    include_once 'configuracao.php';

    echo "<h1>Usando constantes</h1>";

    echo "<h2>Maneiras de criar</h2>"; 

    echo '<h4>const</h4>';
    echo SITE_NOME;
    echo "<br/>";
    echo '<h4>define<h4>';
    echo SITE_DESCRICAO;

    echo "<hr/>";

    echo '<h2>Maneiras de chamar</h2>';

    echo '<h4>1ª maneira</h4>';
    echo SITE_NOME;

    echo '<h4>2ª maneira</h4>';
    echo constant('SITE_NOME');

?>