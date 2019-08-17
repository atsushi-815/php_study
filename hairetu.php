<?php

$fruits = array(
    'apple' => array(
        'price' => 100,
        'count' => 2,
        'unit' => "つ",
    ),
    'grape' => array(
        'price' => 300,
        'count' => 4,
        'unit' => "個",
    ),
);

foreach ($fruits as $name => $value)
{
    echo $name ."は{$value['count']}{$value['unit']}で{$value['price']} 円です。",PHP_EOL;
}
