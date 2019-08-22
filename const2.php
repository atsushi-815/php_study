<?php
class Employee
{
    const PARTTIME = 0x01;
    const REGULAR  = 0x02;
    const CONTRACT = 0x04;


    private $name;
    private $type;


    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}

$yamada = new Employee("やまだ", Employee::REGULAR);

var_dump($yamada);
