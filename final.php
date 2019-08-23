<?php
class Employee
{
    public $salary = 20;

    public final function getSalary()
    {
        return $this->salary;
    }
}

class Programmer extends Employee
{
    public function getSalary()
    {
        return $this->salary * 2;
    }
}

$general = new Employee();
echo $general->getSalary(),PHP_EOL;

$programmer = new Programmer();
echo $programmer->getSalary();
