<?php 
    include_once 'Nucleo/Mensagem.php';

    echo "<h1>Introdução às classes</h1>";

    // 'new' é para chamar a classe criada
    $msg = new Mensagem();

    echo $msg -> renderizar();

    echo '<hr>';
    var_dump($msg);

?>