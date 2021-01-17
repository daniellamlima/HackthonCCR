<?php

/**
 * @Descricao: Arquivo com as configurações globais do sistema
 * @Autor: Iury Gomes de Oliveira
 * @Email: iurygdeoliveira@gmail.com
 * @copyright (c) 2020, Iury Gomes de Oliveira
 */

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "http://127.0.0.1:5000");
define("CONF_URL_ADMIN", CONF_URL_BASE . "/admin");
define("CONF_URL_ERROR", CONF_URL_BASE . "/404");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * SESSION
 */
define("CONF_SES_PATH", __DIR__ . "/../../storage/sessions/");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);