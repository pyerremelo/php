<?php 
    //Escrevendo em arquivo
    $file = fopen('dados002.txt','w');
    fwrite($file, 'Pyerre '.chr(10));
    fwrite($file, 'de Melo');
    fclose($file);

    //Lendo um arquivo linha a linha
    $arquivo = file('dados002.txt');
    for ($i=0; $i<count($arquivo); $i++){
        //Imprime cada linha com uma quebra de linha em html
        echo $arquivo[$i]."<BR>";
    }
?>