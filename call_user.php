<?php
function add($v1, $v2)
{
    return $v1 + $v2;
}

class Math
{
    public function sub($v1, $v2)
    {
        return $v1 - $v2;
    }

    public static function add($v1, $v2)
    {
        return $v1 + $v2;
    }
}


call_user_func('add', 1, 2);

/*
call_user_func(function ($v1, $v2) { return $v1 + $v2;}, 1, 2);

call_user_func(array('Math', 'add'), 1, 2);

call_user_func('Math::add', 1, 2);

$math = new Math();
call_user_func(array($math, 'sub'), 1, 2);

call_user_func_array('add', array(1, 2));
call_user_func_array(array($math, 'sub'), array(1, 2));
*/
