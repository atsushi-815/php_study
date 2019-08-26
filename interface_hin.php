<?php
interface Gundam
{
    public function robot();
}

class Z_Gundam implements Gundam
{
    public function robot()
    {
        echo "俺の力をみんなに貸すぞ！",PHP_EOL;
    }
}

class Barubatos_Gundam implements Gundam
{
    public function robot()
    {
        echo "もっとよこせ",PHP_EOL;
    }
}

class Bot
{
    public function do(Gundam $gundam)
    {
        $gundam->robot();
    }
}

$ms = new Z_Gundam();
$mika = new Barubatos_Gundam();
$bot = new Bot();

$bot->do($ms);
$bot->do($mika);
