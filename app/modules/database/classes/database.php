<?php
namespace App\Modules\Database\Classes;

use App\Config\ConfigDatabase;

class DataBase
{
    private static mixed $conntection = null;

    public static function getConnection()
    {
        if (self::$conntection === null)
        {
            self::$conntection = new \PDO(
                'mysql:host=' . ConfigDatabase::$host . ';dbname=' . ConfigDatabase::$dataBase,
                ConfigDatabase::$user,
                ConfigDatabase::$password
            );
        }

        return self::$conntection;
    }
}