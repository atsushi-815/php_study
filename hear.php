<?php
$age=15;

$foo = <<<zikken
これで改行しても全ての文字がfoo変数に格納される

キャリコの年齢は"$age"才です。

zikken;

echo $foo;
