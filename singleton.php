<?php

class Singleton
{
    private static $instance;

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}

class NotSingleton
{
}

echo 'Singleton is a singleton : ';
var_export(Singleton::getInstance() === Singleton::getInstance());
echo "\n";

echo 'NotSingleton is a singleton : ';
var_export(new NotSingleton() === new NotSingleton());
echo "\n";