<?php

class Employee
{
    public $name;
    public static $company = "技術社";

    public function work()
    {
        echo "生きている",PHP_EOL;
    }
}

$yu = new Employee();
$yu->name = "ゆう";
echo $yu->name,Employee::$company,PHP_EOL;
echo $yu->work();
