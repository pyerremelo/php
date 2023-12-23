<?php  
    ob_start();
    include ("../2.15_leitura_e_gravacao_de_arquivos/4-exemplo_completo/dados001.txt");
    header("location: http://google.com.br");
    ob_flush();
?>