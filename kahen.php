<?php
function func_caller($name)
{
    if (function_exists($name)) 
    {
        $name();
    }
}

function foo()
{
    echo 'foo called', PHP_EOL;
}

func_caller('foo');
