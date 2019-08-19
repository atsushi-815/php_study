<?php

class Employee
{
    public $name;
    private $state = "働いている";


    public function work()
    {
        echo "生きている",PHP_EOL;
    }
}

$yu = new Employee();
$yu->name = "ゆう";
echo $yu->state, $yu->name,PHP_EOL;
echo $yu->work();
