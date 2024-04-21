<?php

namespace Interview\PHP\Pattern;

class Singleton
{
    private static $instance;

    private function __construct()
    {
        // private constructor prevents direct instantiation
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function isInstanceCreated()
    {
        $isInstaceCreated = 1;

        if (!isset(self::$instance)) {
            $isInstaceCreated = 0;
        }

        return $isInstaceCreated === 1 ? 'Created!!!' : 'Not created!!!';
    }
}
