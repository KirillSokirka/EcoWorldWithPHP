<?php

class Database
{
    private static $instances = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Database
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new PDO
            ("mysql:host=localhost;port=3306;dbname=ecoworld"
                , "root", "aa4938nr");
        }

        return self::$instances[$cls];
    }
}