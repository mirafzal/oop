<?php

class BaseModel
{
    public static $table = 'basemodel';

    static function mystatic() {
        echo static::$table;
    }

    static function myself() {
        echo self::$table;
    }

    public function hello() {
        echo 'gg';
    }
}