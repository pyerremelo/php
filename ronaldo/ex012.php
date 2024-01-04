<?php
    include_once 'configuracao.php';
    include_once 'helpers.php';

    echo "<h1>Usando o SERVER_NAME da constante \$_SERVER<h1>";
    
    var_dump(localhost());
    echo "<br>";
    var_dump(url('py'));
?>