<?php

$dice = range(1,10);
shuffle($dice);
foreach ($dice as $value)
{
    echo $value,PHP_EOL;
    if ($value === 1)
    {
        break;
    }
}
