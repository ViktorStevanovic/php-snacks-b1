<?php

class Person
{
    public $name;
    public $last_name;
    public $age;

    public function __construct(string $_name, string $_last_name, int $_age)
    {
        $this->name = $_name;
        $this->last_name = $_last_name;
        $this->age = $_age;
    }

    public function setAge($age)
    {
        if (!is_int($age)) {
            throw new Exception('Is not a number');
        }
        return $age;
    }
}
