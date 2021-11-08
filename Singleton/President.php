<?php

namespace DesignPattern\Singleton;

class President
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    private function __clone()
    {
        //不允许克隆
    }

    public function speech()
    {
        echo 'China,China,China' . PHP_EOL;
    }

}