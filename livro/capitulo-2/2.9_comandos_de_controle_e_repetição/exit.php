<?php 
    $arquivo = '/caminho/inexistente';
    $file = fopen($arquivo, 'r') or exit ('Problemas ao abrir o arquivo');
    //Resultado:
    //Warning: fopen(/caminho/inexistente): Failed to open stream: No such file or directory
    //in C:\xampp\htdocs\aprendendophp\livro\capitulo-2\2.9_comandos_de_controle_e_repetição\exit.php
    //on line 3
    //Problemas ao abrir o arquivo
?>