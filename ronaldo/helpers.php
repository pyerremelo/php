<?php

/**
 * Função que é capaz de validar um CPF
 * 
 * @param string $cpf é o CPF que o usuário vai digitar separado por pontos (.) e hífens (-)
 * @return bool Retorna true se o CPF for válido e false se não for
 */
function validarCpf(string $cpf): bool
{
    // Pega todos os caracteres digitados (inclusive os '.' e '-')
    // Se for menor que 14 ou contiver 3 números sequenciais diretos (tipo: 111. '...') retorna false
    if (mb_strlen($cpf) != 14 or preg_match('/(\d)\1(10)/', $cpf)) {
        return false;
    }

    // Aqui retira-se os '.' e '-' deixando o número apenas
    $cpf = preg_replace('/[^0-9]/','',$cpf);

    // Aqui é o cálculo para validção de CPF
    // Se der certo é true senão é false
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}


/**
 * Função que retorna uma URL amigável
 * 
 * @param string $titulo É o texto que o usuário escreverá
 * @return string Retorna o $titulo formatado
 */
function slug(string $titulo): string
{
    #Segundo parâmetro que contêm os caracteres que serão substituídos
    $mapa['a'] = 'ÀÁÃÂÈÉÊÍÌÎÒÓÔÕÚÙÛÝàáãâèéêíìîóòôõúùûý@#$%&*()_+={[}]/?°:;.><ºª§-\|!';

    #terceiro parâmetro que contêm os caracteres que substituirão os de cima
    $mapa['b'] = 'aaaaeeeiiioooouuuyaaaaeeeiiioooouuuy';

    //Aqui está convertendo para UTF-8(mb_convert_encoding) e ao mesmo tempo está substituindo os caracteres $mapa['a'] pelo $mapa['b'] 
    $slug = strtr(mb_convert_encoding($titulo, 'Windows-1252', 'UTF-8'), mb_convert_encoding($mapa['a'], 'Windows-1252', 'UTF-8'), mb_convert_encoding($mapa['b'], 'Windows-1252', 'UTF-8'));

    //Tirando os espaços desnecessários e as tags HTML
    $slug = strip_tags(trim($slug));

    //Substituindo os espaços entre as palvras por '-'
    $slug = str_replace(' ', '-', $slug);
    $slug = str_replace(['-----', '----', '---', '--', '-'], '-', $slug);

    #Formatado em letras minúsculas, sem espaços desnecessários e as palavras separadas por hífens
    return strtolower($slug);
}


/**
 * Função que retorna a data formatada padrão windows
 * 
 * @return string Data formatada
 */
function dataAtual(): string
{
    #Número do dia atual
    $diaAtual = date('j');

    #Contador de posição do array $nomesDiasDaSemana
    $diaSemana = date('w'); // O 'w' já começa do 0

    #Contador de posição do array $nomesDosMeses
    $mes = date('n') - 1; // -1 pois o 'n' começa do 1

    #Número do ano atual
    $ano = date('Y');

    #Array que possui os dias da semana
    $nomesDiasDaSemana = [
        'Domingo', // 0
        'Segunda-feira', // 1
        'Terça-feira', // 2
        'Quarta-feira', // 3
        'Quinta-feira', // 4
        'Sexta-feira', // 5
        'Sábado' // 6
    ];

    #Array que possui os nomes dos meses
    $nomesDosMeses = [
        'Janeiro', // 0
        'Fevereiro', // 1
        'Março', // 2
        'Abril', // 3
        'Maio', // 4
        'Junho', // 5
        'Julho', // 6
        'Agosto', // 7
        'Setembro', // 8
        'Outubro', // 9
        'Novembro', // 10
        'Dezembo' // 11
    ];

    $dataFormatada = $nomesDiasDaSemana[$diaSemana] . ', ' . $diaAtual . ' de ' . $nomesDosMeses[$mes] . ' de ' . $ano;

    return $dataFormatada;
}


/**
 * Complementação de URL
 * 
 * @param string $url URL inserida pelo usuário
 * @return string Retorna o SERVER_NAME com '/ ' caso precise e logo depois a $url digitada pelo usuário
 */
function url(string $url): string
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if (str_starts_with($url, '/')) {
        return $ambiente . $url;
    }

    return $ambiente . '/' . $url;
}

/**
 * Diz o retorno do nome do servidor
 * 
 * @return bool Retorna true caso o nome do servidor seja localhost e false caso não
 */
function localhost(): bool
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

    if ($servidor == 'localhost') {
        return true;
    } else {
        return false;
    }
}


/**
 * Valida a URL inserida pelo usuário
 * 
 * @param string $url URL digitado pelo usuário
 * @return bool Retorna false caso seja incorreta e true caso seja válida
 */
function validarUrl(string $url): bool
{
    if (mb_strlen($url) < 10) {
        return false;
    }
    if (!str_contains($url, '.')) {
        return false;
    }
    if (str_contains($url, 'http://') or str_contains($url, 'https://')) {
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
function validarUrlComFiltro(string $url): bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}


/**
 * Valida o e-mail inserido pelo usuário
 * 
 * @param string $email Endereço de email digitado pelo usuário
 * @return bool Retorna true caso o email seja válido e false caso não
 */
function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


/**
 * Conta o tempo decorrido de uma data
 * 
 * @param string $data Data informada pelo usuário
 * @return string Tempo decorrido da data informada
 */
function contarTempo(string $data): string
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

    if ($segs <= 59) {
        return 'agora';
    } else if ($min <= 59) {
        return $min == 1 ? 'à 1 minuto' : 'à ' . $min . ' minutos';
    } else if ($hrs <= 23) {
        return $hrs == 1 ? 'à 1 hora' : 'à ' . $hrs . ' horas';
    } else if ($dias <= 6) {
        return $dias == 1 ? 'ontem' : 'à ' . $dias . ' dias';
    } else if ($sem <= 3) {
        return $sem == 1 ? 'à 1 semana' : 'à ' . $sem . ' semanas';
    } else if ($mes <= 11) {
        return $mes == 1 ? 'à 1 mês' : 'à ' . $mes . ' meses';
    } else {
        return $anos == 1 ? 'à 1 ano' : 'à ' . $anos . ' anos';
    }
}


/**
 * Formata um valor numérico colocando ',' e '.'
 * 
 * @param float $valor valor que vai ser formatado. Caso não seja inserido nada, será apresentado 0
 * @return string valor formatado
 */
function formatarValor(float $valor = null): string
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

    // if ($hora >= 0 && $hora <= 5) {
    //     $saudacao = 'Boa madrugada';
    // } elseif ($hora >= 6 and $hora <= 12) {
    //     $saudacao = 'Boa dia';
    // } elseif ($hora >= 13 and $hora <= 18) {
    //     $saudacao = 'Boa tarde';
    // } else {
    //     $saudacao = 'Boa noite';
    // }

    // switch ($hora){
    //     case $hora >= 0 && $hora <= 5:
    //         $saudacao = 'Boa madrugada';
    //         break;
    //     case $hora >= 6 and $hora <= 12:
    //         $saudacao = 'Boa dia';
    //         break;
    //     case $hora >= 13 and $hora <= 18:
    //         $saudacao = 'Boa tarde';
    //         break;
    //     default:
    //         $saudacao = 'Boa noite';
    // }

    // $saudacao = match ($hora){
    //     '0','1','2','3','4','5' => 'Boa madrugada',
    //     '6','7','8','9','10','11','12' => 'Bom dia',
    //     '13','14','15','16','17','18' => 'Boa tarde',
    //     '19','20','21','22','23','24' => 'Boa noite'
    // };

    $saudacao = match (true) {
        $hora >= 0 and $hora <= 5 => 'Boa madrugada',
        $hora >= 6 && $hora <= 12 => 'Bom dia',
        $hora >= 13 and $hora <= 18 => 'Boa tarde',
        default => 'Boa noite'
    };

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
    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}
