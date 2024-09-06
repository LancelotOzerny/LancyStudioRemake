<?php
namespace App\Modules\System\Traits;

trait Singleton
{
    protected static self | null $instance = null;

    protected function __construct() {}
    protected function __clone() {}

    public static function Instance() : self | null
    {
        if (self::$instance instanceof self === false)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
}