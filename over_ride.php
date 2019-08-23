<?php
class Employee
{
    public function work()
    {
        echo "働いている",PHP_EOL;
    }
}
$yamada = new Employee();
echo $yamada->work();

class Programmer extends Employee
{
    public function work()
    {
        echo "コードを書いている",PHP_EOL;
    }
}

$tanaka = new Programmer();
echo $tanaka->work();
