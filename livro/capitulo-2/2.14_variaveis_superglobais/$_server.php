<?php 
    echo ($_SERVER['SERVER_ADDR'].'<BR>');
    //Resultado: 189.21.32, endereço do IP do servidor
    #IP do servidor

    echo ($_SERVER['SERVER_NAME'].'<BR>');
    //Resultado: nome_do_domínio.com.br do servidor
    #Nome do domínio em que o servidor etá executando

    echo($_SERVER['HTTP_ACCEPT_ENCODING'].'<BR>');
    //Resultado: gzip, deflate
    #Conteúdo do header Accept-Encoding configurado para o servidor
    # em que o PHP etá executando

    echo ($_SERVER['HTTP_USER_AGENT'].'<BR>');
    #Exibe dados do navegador do usuário que originou a requisição
    # ao servidor

    echo ($_SERVER['REMOTE_ADDR'].'<BR>');
    #Exibe o endereço do usuário que originou a requisição ao servidor
?>