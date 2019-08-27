<?php

class Employee
{
    public function __toString()
    {
        return 'This class is: ' . __CLASS__;
    }
}

$yamada = new Employee();
echo $yamada,PHP_EOL;
