<?php

/**
 * @Descricao: Arquivo com as funções de helpers do sistema
 * @Autor: Daniela Lima
 * @Email: daniellalima@gmail.com
 * @copyright (c) 2020, Daniela Lima
 */
/**
 * ####################
 * ###   VALIDATE   ###
 * ####################
 */

/**
 * @Descrição: Verifica se o email é valido 
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @Descrição: Verifica se a senha é valida 
 */
function is_passwd(string $password): bool
{

    if (password_get_info($password)['algo'] || ((mb_strlen($password) >= CONF_PASSWD_MIN_LEN &&
        mb_strlen($password) <= CONF_PASSWD_MAX_LEN))) :
        return true;
    endif;

    return false;
}

/**
 * @Descrição: Gera um hash para a senha 
 */
function passwd(string $password): string
{

    if (!empty(password_get_info($password)['algo'])) :
        return $password;
    endif;

    return password_hash($password, CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
}

/**
 * @Descrição: Verifica a senha 
 */
function passwd_verify(string $password, string $hash): bool
{
    return password_verify($password, $hash);
}

/**
 * @Descrição: Gera um novo hash para a senha 
 */
function passwd_rehash(string $hash): bool
{
    return password_needs_rehash($hash, CONF_PASSWD_ALGO, CONF_PASSWD_OPTION);
}

/**
 * @Descrição: Validar o CPF  
 */
function is_cpf(string $cpf_informado)
{

    $cpf = filter_var(
        $cpf_informado,
        FILTER_SANITIZE_STRING,
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    // Elimina possivel mascara
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo 
    // foi digitada. Caso afirmativo, retorna falso
    else if (
        $cpf == '00000000000' ||
        $cpf == '11111111111' ||
        $cpf == '22222222222' ||
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999'
    ) {
        return false;
        // Calcula os digitos verificadores para verificar se o
        // CPF é válido
    } else {

        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{
                    $c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{
                $c} != $d) {
                return false;
            }
        }

        return $cpf;
    }
}

/**
 * ##################
 * ###   STRING   ###
 * ##################
 */

/**
 * @Descrição: Transforma uma string qualquer em uma URL 
 */
function str_url(string $string): string
{

    $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);

    // Ter cuidado para não alterar as posições das strings abaixo
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $string = str_replace(
        ["-----", "----", "---", "--"],
        "-",
        str_replace(" ", "-", trim(strtr(utf8_decode($string), utf8_decode($formats), $replace)))
    );

    return $string;
}

/**
 * @Descrição: Transforma uma string qualquer para o formato studly_case 
 */
function str_studly_case(string $string): string
{

    $string = str_url($string);

    $studlyCase = str_replace(
        " ",
        "",
        mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE)
    );


    return $studlyCase;
}

/**
 * @Descrição: Transforma uma string qualquer para o formato CamelCase 
 */
function str_camel_case(string $string): string
{

    return lcfirst(str_studly_case($string));
}

/**
 * @Descrição: converte string para caixa alta 
 */
function str_title(string $string): string
{
    return mb_convert_case(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS), MB_CASE_TITLE);
}

/**
 * @Descrição: Realiza quebra de linha em campus textarea 
 */
function str_textarea(string $text): string
{
    $text = filter_var($text, FILTER_SANITIZE_STRIPPED);
    $arrayReplace = ["&#10;", "&#10;&#10;", "&#10;&#10;&#10;", "&#10;&#10;&#10;&#10;", "&#10;&#10;&#10;&#10;&#10;"];
    return "<p>" . str_replace($arrayReplace, "</p><p>", $text) . "</p>";
}

/**
 * @Descrição: Limita o tamanho de palavras 
 */
function str_limit_words(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(" ", $string);
    $numWords = count($arrWords);

    if ($numWords < $limit) {
        return $string;
    }

    $words = implode(" ", array_slice($arrWords, 0, $limit));
    return "{$words}{$pointer}";
}

/**
 * @Descrição: Limita o tamanho de caracteres 
 */
function str_limit_chars(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    if (mb_strlen($string) <= $limit) {
        return $string;
    }

    $chars = mb_substr($string, 0, mb_strrpos(mb_substr($string, 0, $limit), " "));
    return "{$chars}{$pointer}";
}

/**
 * @Descrição: Transforma uma string para o formato em moeda no brasil 
 */
function str_price(string $price): string
{
    return number_format($price, 2, ",", ".");
}

/**
 * @Descrição: Transforma uma string para o formato em moeda no brasil 
 */
function str_random(): string
{
    $vogais = array('a', 'e', 'i', 'o', 'u');
    $consoantes = array('b', 'c', 'd', 'f', 'g', 'h', 'nh', 'lh', 'ch', 'j', 'k', 'l', 'm', 'n', 'p', 'qu', 'r', 'rr', 's', 'ss', 't', 'v', 'w', 'x', 'y', 'z',);

    $palavra = '';
    $tamanho_palavra = rand(2, 5);
    $contar_silabas = 0;

    while ($contar_silabas < $tamanho_palavra) {
        $vogal = $vogais[rand(0, count($vogais) - 1)];
        $consoante = $consoantes[rand(0, count($consoantes) - 1)];
        $silaba = $consoante . $vogal;
        $palavra .= $silaba;
        $contar_silabas++;
        unset($vogal, $consoante, $silaba);
    }
    unset($vogais, $consoantes, $tamanho_palavra, $contar_silabas);
    return $palavra;
}

/**
 * ######################
 * ###   NAVIGATION   ###
 * ######################
 */

/**
 * @Descrição: Montar url  
 */
function url(string $path = null): string
{

    if (strpos($_SERVER['HTTP_HOST'], "localsuperbov")) :
        if ($path) :
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        endif;
        return CONF_URL_TEST;
    endif;

    if ($path) :
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    endif;

    return CONF_URL_BASE;
}

function url_back(): string
{

    // Retorna a url que estava anteriormente ou então a própria URL.
    return ($_SERVER['HTTP_REFERER'] ?? url());
}

/**
 * @Descrição: Realiza o redirecionamento de pagina 
 */
function redirect(string $url): void
{

    header("HTTP/1.1 302 Redirect");
    if (filter_var($url, FILTER_VALIDATE_URL)) :
        header("Location: {$url}");
        exit;
    endif;

    if (filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url) :
        $location = url($url);
        header("Location: {$location}");
    endif;
}

/**
 * ##################
 * ###   ASSETS   ###
 * ##################
 */

/**
 * @Descrição: Retorna o usuario conectado  
 */
function user(): ?\source\models\Usuario
{
    return \source\models\Auth::User();
}

/**
 * @Descrição: Montar os caminhos para os assets do template  
 */
function theme(string $path = null, string $theme = CONF_VIEW_LOGIN): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localsuperbov")) {
        if ($path) {
            return CONF_URL_TEST . "/themes/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }

        return CONF_URL_TEST . "/themes/{$theme}";
    }

    if ($path) {
        return CONF_URL_BASE . "/themes/{$theme}/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE . "/themes/{$theme}";
}

/**
 * @Descrição: Montar os caminhos para a imagem
 * @param string $image Caminho da imagem  
 */
function image(string $image, int $width, int $height = null): string
{

    return url() . "/" . (new source\support\Thumb())->Make($image, $width, $height);
}

/**
 * ################
 * ###   DATE   ###
 * ################
 */
function date_fmt(string $date = "now", string $format = "d/m/Y H\hi"): string
{

    return (new DateTime($date))->format($format);
}

function date_fmt_br(string $date = "now"): string
{

    return (new DateTime($date))->format(CONF_DATE_BR);
}

function date_fmt_app(string $date = "now"): string
{

    return (new DateTime($date))->format(CONF_DATE_APP);
}

/**
 * ###################
 * ###   REQUEST   ###
 * ###################
 */

/**
 * @Descrição: Auxiliar na geração de um novo csrf_token 
 */
function csrf_input(): string
{

    $session = new \source\core\Session();
    $session->csrf();

    return "<input type='hidden' name='csrf' value='"
        . ($session->csrf_token ?? "") . "'/>";
}

/**
 * @Descrição: Verifica csrf_token 
 */
function csrf_verify($request): bool
{

    $session = new \source\core\Session();

    if (empty($session->csrf_token) || empty($request['csrf']) || $request['csrf'] != $session->csrf_token) {
        return false;
    }
    return true;
}

/**
 * @Descrição: Retorna a mensagem flash da Session 
 */
function flash(): ?string
{
    $session = new \source\core\Session();
    $flash = $session->flash();
    if ($flash) {
        echo $flash;
    }
    return null;
}

/**
 * @Descrição: Configura a quantidade de requisições em um formulário
 * @param string $key Chave de controle para evitar conflito em pontos diferentes do software  
 * @param int $limit Quantidade de requisições permitida  
 * @param int $seconds Tempo permitido para realizar requisições  
 */
function request_limit(string $key, int $limit = 5, int $seconds = 60): bool
{
    $session = new \source\core\Session();
    if ($session->has($key) && $session->$key->time >= time() && $session->$key->requests < $limit) {
        $session->set($key, [
            "time" => time() + $seconds,
            "requests" => $session->$key->requests + 1
        ]);
        return false;
    }

    if ($session->has($key) && $session->$key->time >= time() && $session->$key->requests >= $limit) {
        return true;
    }

    $session->set($key, [
        "time" => time() + $seconds,
        "requests" => 1
    ]);

    return false;
}

function request_repeat(string $field, string $value): bool
{
    $session = new \source\core\Session();
    if ($session->has($field) && $session->$field == $value) {
        return true;
    }

    $session->set($field, $value);
    return false;
}