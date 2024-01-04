<?php 
    include_once ('helpers.php');

    $email = 'teste@hotmail';
    $url = 'http://pyerre-top-das-galaxias.io';

    echo "<h1>Filtros</h1>";

    echo "<H2>Validar E-Mail</H2>";
    if (validarEmail($email)){
        echo "Endereço de e-mail válido <BR>";
        echo "E-mail inserido: $email";
    } else {
        echo "Endereço de e-mail incorreto <BR>";
        echo "E-mail inserido: $email";
    }

    echo "<HR>";

    echo "<H2>Validar URL (com filtro)</H2>";
    
    if (validarUrlComFiltro($url)){
        echo "URL inserida válida <BR>";
        echo "URL inserida: $url";
    } else {
        echo "URL inserida inválida <BR>";
        echo "URL inserida: $url";
    }
    
    echo "<H2>Validar URL (sem filtro)</H2>";
    

    if (validarUrl($url)){
        echo "URL inserida válida <BR>";
        echo "URL inserida: $url";
    } else {
        echo "URL inserida inválida <BR>";
        echo "URL inserida: $url";
    }

?>