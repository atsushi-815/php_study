<?php
class Employee
{
    public function work()
    {
        echo "書類を整理しています",PHP_EOL;
    }
}

$satan = new Employee();
$satan->work();
