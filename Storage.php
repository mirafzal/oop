<?php

abstract class Storage
{
    abstract public function save();
    abstract public function read();

    public function hello() {
        echo 'hello';
    }
}