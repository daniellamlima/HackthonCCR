<?php

/**
 * @Descricao: Arquivo com as configurações globais do sistema
 * @Autor: Daniela Lima
 * @Email: daniellalima@gmail.com
 * @copyright (c) 2020, Daniela Lima
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
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * DB
 */

use RedBeanPHP\R;

R::setup(
    "mysql:host=" . getenv('MYSQL_HOST') .
        ";dbname=" . getenv('MYSQL_DATABASE'),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD'),
); //for both mysql or mariaDB

R::getDatabaseAdapter()->getDatabase()->stringifyFetches(FALSE);
R::getDatabaseAdapter()->getDatabase()->getPDO()->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../views/");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_LOGIN", "login");
define("CONF_VIEW_APP", "app");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);


/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "??");
define("CONF_MAIL_PASS", "??");
define("CONF_MAIL_SENDER", ["name" => "Daniella", "address" => "Daniella Lima"]);
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
