<?php

abstract class Employee
{
    abstract public function work();
}

class Program extends Employee
{
    public function work()
    {
        return "test";
    }
}

$test = new Program();
echo $test->work(),PHP_EOL;
