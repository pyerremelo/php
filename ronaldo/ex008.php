<?php
    //Arquivo de configuração do sistema
    include_once ('configuracao.php');

    echo "<h1>Usando o comando date</h1>";

    $data = date ('d/m/Y H:i:s');

    echo $data;
?>