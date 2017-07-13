<?php

namespace App\Fib;

function fib($num)
{
    // BEGIN (write your solution here)
    if ($num == 0) {return 0;}
    if ($num == 1) {return 1;}
    return fib($num-1)+fib($num-2);
    // END
}

echo fib(10).PHP_EOL;
