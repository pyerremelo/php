<?php
function saudacao(): string
{
    //date_default_timezone_set('America/Sao_Paulo');
    //date('\H\o\j\e é d/m/Y \à\s g a', time());
    //ALT + SHIFT + F = Identa o código

    $hora = date('H');

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'Boa madrugada';
    } elseif ($hora >= 6 and $hora <= 12) {
        $saudacao = 'Boa dia';
    } elseif ($hora >= 13 and $hora <= 18) {
        $saudacao = 'Boa tarde';
    } else {
        $saudacao = 'Boa noite';
    }
    //echo date('\H\o\j\e é d/m/Y \à\s G', time());
    //echo "<BR>";
    return $saudacao;
}

function resumirTexto(string $texto, int $limite, string $continue = '...')
{

    $textoLimpo = trim(strip_tags($texto));
    if (mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}

?>