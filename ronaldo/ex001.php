<?php 

    echo "<h1>Criando funções de saudação e texto resumido</h1>";

    function saudacao (){
        return 'Boa tarde';
    }

    function resumirTexto (){
        echo 'Texto resumido';
    }
    echo saudacao();
    echo '<hr>';
    resumirTexto();
?>