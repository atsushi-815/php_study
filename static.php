<?php
class Employee
{
    private static $company = "技術会社";
    
    public static function getCompany()
    {
        return self::$company;
    }

    public static function setCompany($value)
    {
        return self::$company = $value;
    }
}

echo Employee::getCompany(),PHP_EOL;
echo Employee::setCompany("技術"),PHP_EOL;
echo Employee::getCompany(),PHP_EOL;
