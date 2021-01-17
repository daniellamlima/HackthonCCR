<?php

declare(strict_types=1);

namespace source\models;

use \RedBeanPHP\R;
use PDO;

class Connect
{

    public static function getInstance()
    {
        R::setup(
            "mysql:host=" . getenv('MYSQL_HOST') .
                ";dbname=" . getenv('MYSQL_DATABASE'),
            getenv('MYSQL_USER'),
            getenv('MYSQL_PASSWORD'),
        ); //for both mysql or mariaDB

        R::getDatabaseAdapter()->getDatabase()->stringifyFetches(FALSE);
        R::getDatabaseAdapter()->getDatabase()->getPDO()->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    }
}