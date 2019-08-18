<?php
$hour = date('G');

echo $hour,PHP_EOL;

switch ($hour)
{
    case '4';
        echo "微妙な時間";
        break;
    case '12';
        echo "こんにちは";
        break;
    default:
        echo "どうも";
        break;
}
