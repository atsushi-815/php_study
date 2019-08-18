<?php
$fruits_color = array(
    'apple' => 'red',
    'lemon' => 'yellow',
    'melon' => 'green',
);

foreach ($fruits_color as &$color)
{
    $color = 'white';
}


var_dump($fruits_color);
unset($fruits_color);
var_dump($fruits_color);
