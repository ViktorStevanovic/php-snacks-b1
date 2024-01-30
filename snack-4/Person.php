<?php

class Person
{
    public $name;
    public $last_name;
    public $age;

    public function setAge($age)
    {
        if (!is_int($age)) {
            throw new Exception('Is not a number');
        }
        return $age;
    }
}
