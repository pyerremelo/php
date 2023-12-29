<?php 
    include_once ('helpers.php');

    $email = 'teste@hotmail';
    $url = 'http://pyerre-top-das-galaxias.io';

    echo "<H1>Validar E-Mail</H1>";
    if (validarEmail($email)){
        echo "Endereço de e-mail válido <BR>";
        echo "E-mail inserido: $email";
    } else {
        echo "Endereço de e-mail incorreto <BR>";
        echo "E-mail inserido: $email";
    }

    echo "<HR>";

    echo "<H1>Validar URL</H1>";
    // var_dump(validarUrl('http://pyerre-top-das-galaxias.io'));

    if (validarUrl($url)){
        echo "URL inserida válida <BR>";
        echo "URL inserida: $url";
    } else {
        echo "URL inserida inválida <BR>";
        echo "URL inserida: $url";
    }


?>