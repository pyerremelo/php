<?php

/**
 * Complementação de URL
 * 
 * @param string $url URL inserida pelo usuário
 * @return string Retorna o SERVER_NAME com '/ ' caso precise e logo depois a $url digitada pelo usuário
 */
function url(string $url):string
{
    $servidor = filter_input(INPUT_SERVER,'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if (str_starts_with($url,'/')){
        return $ambiente.$url;    
    }

    return $ambiente.'/'.$url;
}

/**
 * Diz o retorno do nome do servidor
 * 
 * @return bool Retorna true caso o nome do servidor seja localhost e false caso não
 */
function localhost():bool
{
    $servidor = filter_input(INPUT_SERVER,'SERVER_NAME');

    if ($servidor == 'localhost'){
        return true;
    }
    else {
        return false;
    }
}


/**
 * Valida a URL inserida pelo usuário
 * 
 * @param string $url URL digitado pelo usuário
 * @return bool Retorna false caso seja incorreta e true caso seja válida
 */
function validarUrl (string $url):bool
{
    if (mb_strlen($url) < 10){
        return false;
    }
    if (!str_contains($url, '.')){
        return false;
    }
    if (str_contains($url, 'http://') or str_contains($url, 'https://')){
        return true;
    }
    return false;
}




/**
 * Valida a URL inserido pelo usuário
 * 
 * @param string $url URL digitado pelo usuário
 * @return bool Retorna true caso a url seja válida e false caso não
 */
function validarUrlComFiltro (string $url):bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}


/**
 * Valida o e-mail inserido pelo usuário
 * 
 * @param string $email Endereço de email digitado pelo usuário
 * @return bool Retorna true caso o email seja válido e false caso não
 */
function validarEmail (string $email):bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


/**
 * Conta o tempo decorrido de uma data
 * 
 * @param string $data Data informada pelo usuário
 * @return string Tempo decorrido da data informada
 */
function contarTempo (string $data):string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segs = $diferenca;
    $min = round($diferenca / 60);
    $hrs = round($diferenca / 3_600);
    $dias = round($diferenca / 86_400);
    $sem = round($diferenca / 604_800);
    $mes = round($diferenca / 2_419_200);
    $anos = round($diferenca / 29_030_400);

    if ($segs <= 59){
        return 'agora';
    } else if ($min <= 59){
        return $min == 1 ? 'à 1 minuto' : 'à '.$min.' minutos';
    } else if ($hrs <= 23){
        return $hrs == 1 ? 'à 1 hora' : 'à '.$hrs.' horas';
    } else if ($dias <= 6){
        return $dias == 1 ? 'ontem' : 'à '.$dias.' dias';
    } else if ($sem <= 3){
        return $sem == 1 ? 'à 1 semana' : 'à '.$sem.' semanas';
    } else if ($mes <= 11){
        return $mes == 1 ? 'à 1 mês' : 'à '.$mes.' meses';
    } else {
        return $anos == 1 ? 'à 1 ano' : 'à '.$anos.' anos';
    }
}


/**
 * Formata um valor numérico colocando ',' e '.'
 * 
 * @param float $valor valor que vai ser formatado. Caso não seja inserido nada, será apresentado 0
 * @return string valor formatado
 */
function formatarValor (float $valor=null):string
{
    return number_format(($valor ? $valor : 0), 2, ',', '.');
}


/**
 * Saúda de acordo com o horário do dia
 * 
 * @return string Saudação para o usuário
 */
function saudacao(): string
{
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
    return $saudacao;
}


/**
 * Resume um texto
 * 
 * @param string $texto texto para resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue | opcional | o que deve ser exibido ao final do resumo
 * @return string texto resumido
 */
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