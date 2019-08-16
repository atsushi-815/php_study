<?php
$a = 120;
$b = "120abcer1ere";

if($a === $b) { //自動キャストされないので、「120 = 120abcer1ere」の比較になりfalseが出力される。
    echo "true",PHP_EOL;
} else {
echo "false",PHP_EOL;
}

