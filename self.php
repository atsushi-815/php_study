<?php
class Employee
{
    public static $company = '技術者';

    public function getCompany()
    {
        return self::$company;
    }

}

echo Employee::$company,PHP_EOL;
