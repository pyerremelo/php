<?php
    //Lista de funções do site PHP
    //https://www.php.net/manual/pt_BR/indexes.functions.php

    //Texto base:
    $texto = "  Brasil é nota 10 ";
    echo "<h4>{mb_strlen()} Deste modo conta-se todos os espaços presentes na frase</h4>";
    echo "Frase: \"$texto\"";
    echo "<BR>";
    echo "Total de caracteres: " . $total = mb_strlen($texto);

    echo "<hr>";

    echo "<h4>{mb_strlen(trim())} Deste modo não se conta os espaços antes da 1ª palavra e depois da última palavra</h4>";
    echo "Frase: \"$texto\"";
    echo "<BR>";
    echo "Total de caracteres: " . $total = mb_strlen(trim($texto));

    echo "<hr>";
    echo "<h4>{mb_substr()} Texto cortado a partir da terceira letra </h4>";
    echo "Frase: \"$texto\" <BR>";
    echo "Resumo: " . $resumo = mb_substr($texto, 3, 10) . "<BR>";
    echo "OBS: Lembre-se que na frase há 2 espaços antes de \"Brasil\" e que está cortando até a posição 10 (contando a partir do corte da posição). Outro ponto é que inicia-se a contagem no 1";

    echo "<HR>";
    echo "<h4>{mb_strrpos()} Encontrando a última ocorrência de uma string<h4>";
    echo "Frase: \"$texto\" <BR>";
    $string = 'a';
    echo "última posição da string '$string' está na posição: " . $ocorrencia = mb_strrpos($texto, $string) . "<BR>";
    echo "OBS: conta-se todos os espaços e inicia-se a contagem no 0";
?>